<head>
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>Data Mahasiswa</title>
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
                <th>Nama Guru</th>
                <th>NIP</th>
                <th>Kelamin</th>
                <th>Alamat</th>
                <th>No Telfon</th>
                <th>Username</th>
                <th>Password</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php $no=1; ?>
                @foreach ($data_guru as $dg)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$dg->nama_guru}}</td>
                <td>{{$dg->nip}}</td>
                <td>{{$dg->kelamin}}</td>
                <td>{{$dg->alamat_guru}}</td>
                <td>{{$dg->telpon_guru}}</td>
                <td>{{$dg->username}}</td>
                <td>{{$dg->password}}</td>
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