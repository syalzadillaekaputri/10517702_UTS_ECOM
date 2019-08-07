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
        <h2>Form Data Celana</h2>
        @if(session('error'))
        <div class="alert alert-error">
          {{ session('error')}}
        </div>
        @endif

        @if (count($errors) > 0)
        <div class="alert alert-danger">
          <strong>Perhatian</strong>
          <br />
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <div>
          <form action="{{ url('/celana', @$celana->id) }}" method="POST">
          @csrf
          
          @if(!empty($celana))
              @method('PATCH')
          @endif
            <label >Nama Produk : </label>
            <input type="text" name="nama_produk" value="{{ old('nama_produk', @$celana->nama_produk) }}"/><br><br>
            <label >Bentuk Produk : </label>
            <input type="text" name="bentuk_produk" value="{{ old('bentuk_produk', @$celana->bentuk_produk) }}"/><br><br>
            <label >Color : </label>
            <input type="text" name="color" value="{{ old('color', @$celana->color) }}"/><br><br>
            <label >Ukuran :  </label>
            <input type="text" name="ukuran" value="{{ old('ukuran', @$celana->ukuran) }}"/><br><br>
            <label >Stok :  </label>
            <input type="text" name="stok" value="{{ old('stok', @$celana->stok) }}"/><br><br>            
            <input type="submit" value="Submit"/>
          </form>
        </div>
    </body>
</html>