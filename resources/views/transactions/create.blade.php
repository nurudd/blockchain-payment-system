<!-- resources/views/transactions/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Transaction</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card-header {
            background-color: #7fa8d5;
            color: white;
        }
        .card {
            border-radius: 10px;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .form-control, .form-select {
            border-radius: 5px;
            padding: 15px;
            border: 1px solid #ddd;
        }
        .btn-primary {
            background-color: #7fa8d5;
            border-color: #7fa8d5;
            padding: 12px 20px;
            border-radius: 5px;
            width: 100%;
            font-size: 16px;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .mb-3 {
            margin-bottom: 20px;
        }
        .container {
            max-width: 600px;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="mb-0">Create Transaction</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('transactions.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="amount" class="form-label">Amount:</label>
                                <input type="number" name="amount" id="amount" class="form-control" placeholder="Enter transaction amount" required>
                            </div>
                            <div class="mb-3">
                                <label for="type" class="form-label">Transaction Type:</label>
                                <select name="type" id="type" class="form-select" required>
                                    <option value="blockchain">Blockchain (5% commission)</option>
                                    <option value="manual">Manual (2% commission)</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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
