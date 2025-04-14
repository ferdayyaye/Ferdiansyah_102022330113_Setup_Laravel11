<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f8fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Container for the whole content */
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 80%;
            max-width: 1000px;
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            color: #4e73df;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            font-size: 1rem;
        }

        th, td {
            padding: 12px 20px;
            text-align: left;
            vertical-align: middle;
        }

        th {
            background-color: #4e73df;
            color: #fff;
            font-weight: bold;
            letter-spacing: 1px;
        }

        td {
            background-color: #f9f9f9;
            border-bottom: 1px solid #ddd;
        }

        /* Zebra Stripes (alternate row colors) */
        tr:nth-child(even) td {
            background-color: #fafafa;
        }

        /* Hover Effect */
        tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            table {
                font-size: 0.9rem;
            }

            .container {
                width: 95%;
                padding: 20px;
            }

            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Buku</h1>
        <table>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </tr>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->penulis }}</td>
                    <td>{{ $book->penerbit }}</td>
                    <td>{{ $book->tahun_terbit }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>