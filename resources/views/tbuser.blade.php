<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data User</title>
    <style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
    }
    thead {
        background-color: #f2f2f2;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    tr:nth-child(even){background-color: #f2f2f2}
    .tambah{
        padding: 8px 16px ;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <div style="overflow-x:auto;">
    {{-- <a class="tambah" href="{{route( 'mahasiswa.create')}}">Tambah Data </a> --}}
        <table>
            <thead>
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Level</th>
                <th>Blokir</th>
                <th>Create</th>
                <th>Update</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; ?>
                @foreach ($tb_user as $tu)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$tu->username}}</td>
                <td>{{$tu->password}}</td>
                <td>{{$tu->nama}}</td>
                <td>{{$tu->level}}</td>
                <td>{{$tu->is_blokir}}</td>
                <td>{{$tu->created_at}}</td>
                <td>{{$tu->updated_at}}</td>
                <td>
                    <a href="">Edit </a>
                    <a href=""> Hapus</a>
                </td>
            </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>