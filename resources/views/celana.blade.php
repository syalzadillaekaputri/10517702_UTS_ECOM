<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
            <title>E-Com</title>
                <style>
                    html,
                    body {
                        height: 100%;
                        margin: 10;
                        background: linear-gradient(45deg, #49a09d, #5f2c82);
                        font-family: sans-serif;
                        font-weight: 100;
                    }

                    .container {
                        position: absolute;
                        top: 80%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                    }
                    span {
                        color: #fff;
                    }

                    table {
                        width: 800px;
                        border-collapse: collapse;
                        overflow: hidden;
                        box-shadow: 0 0 20px rgba(0,0,0,0.1);
                    }

                    th,
                    td {
                        padding: 15px;
                        background-color: rgba(255,255,255,0.2);
                        color: #fff;
                        text-align: center;
                    }

                    th {
                        text-align: center;
                    }

                    thead {
                        th {
                            background-color: #55608f;
                        }
                    }

                    tbody {
                        tr {
                            &:hover {
                                background-color: rgba(255,255,255,0.3);
                            }
                        }
                        td {
                            position: relative;
                            &:hover {
                                &:before {
                                    content: "";
                                    position: absolute;
                                    left: 0;
                                    right: 0;
                                    top: -9999px;
                                    bottom: -9999px;
                                    background-color: rgba(255,255,255,0.2);
                                    z-index: -1;
                                }
                            }
                        }
                    }
                </style>
    </head>
    <body>
        <h1>
            <center><span>DATA PRODUK CELANA</span></center>
        </h1>
        <center/>
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success')}}
        </div>
        @endif
        <h2>
            <a href="{{ url('celana/create') }}">
              <button class="button button1">Create Data Celana</button></a>
        </h2>
        @if (session('error'))
        <div class="alert alert-error">
            {{ session('error')}}
        </div>
        @endif
        <table class="container">
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Bentuk Produk</th>
                <th>Color</th>
                <th>Ukuran</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
            @foreach ($celana as $row)
             <tr>
                <td>{{ isset($i) ? ++$i : $i = 1 }}</td>
                <td>{{ $row->nama_produk }}</td>
                <td>{{ $row->bentuk_produk }}</td>
                <td>{{ $row->color }}</td>
                <td>{{ $row->ukuran }}</td>
                <td>{{ $row->stok }}</td>
                <td>
                        <a href="{{ url('/celana/' . $row->id . '/edit') }}">Edit</a>
                        |
                        <form action="{{url('/celana' , $row->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="text">Delete</button>
                        </form>
                    </td>
              </tr>
            @endforeach
        </table> 
    </body>
</html>
