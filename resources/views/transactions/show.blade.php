<!-- resources/views/transactions/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Details</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #7fa8d5;
            color: white;
        }
        .btn-primary {
            background-color: #7fa8d5;
            border-color: #7fa8d5;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="mb-0">Transaction Details</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>ID:</strong> {{ $transaction->transaction_id }}</p>
                        <p><strong>Amount:</strong> {{ $transaction->amount }}</p>
                        <p><strong>Commission:</strong> {{ $transaction->commission }}</p>
                        <p><strong>Type:</strong> {{ $transaction->type }}</p>
                        <p><strong>Status:</strong> {{ $transaction->status }}</p>
                        <a href="{{ route('transactions.create') }}" class="btn btn-primary mt-4">Create Another Transaction</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
