<h2>Funding Request</h2>
<p>Hello {{ Auth::user()->name }},</p>
<p>You have requested to fund your account with the following details:</p>
<ul>
    <li>Amount: ${{ $transaction->amount }}</li>
    <li>Method: {{ strtoupper($transaction->method) }}</li>
    <li>Status: {{ ucfirst($transaction->status) }}</li>
    <li>Charge: ${{ $transaction->charge }}</li>
</ul>
<p>Kindly complete your payment.</p>
