<?php

namespace App\Http\Controllers\Trader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class TraderController extends Controller
{
        // Update name and email
        public function updateDetails(Request $request)
        {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            ]);

            $trader = Auth::user();
            $trader->name = $request->input('name');
            $trader->email = $request->input('email');
            $trader->save();

            return redirect()->back()->with('success', 'Profile updated successfully.');
        }

        // Update password
        public function updatePassword(Request $request)
        {
            $request->validate([
                'password' => 'required|string|min:8|confirmed',
            ]);

            $trader = Auth::user();
            $trader->password = Hash::make($request->input('password'));
            $trader->save();

            return redirect()->back()->with('success', 'Password updated successfully.');
        }

        public function uploadKyc(Request $request)
        {
            $request->validate([
                'kyc_document' => 'required|file|mimes:jpeg,png,pdf|max:2048',
            ]);

            $trader = Auth::user();

            if ($request->hasFile('kyc_document')) {
                // Store the KYC document
                $file = $request->file('kyc_document');
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('kyc_documents', $filename, 'public');

                // Update trader's KYC information
                $trader->kyc_document = $path;
                $trader->kyc_status = 'pending'; // Set KYC status to pending
                $trader->save();

                return redirect()->back()->with('success', 'KYC document uploaded successfully and is pending approval.');
            }

            return redirect()->back()->with('error', 'Failed to upload KYC document.');
        }


}
