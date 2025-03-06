<!DOCTYPE html>
<html lang="en">
    <head>

    </head>
    <body>
        <h1>Form Ubah Data User</h1>
        <a href="/user">Kembali</a>

        <form method="POST" action="/user/ubah_simpan/{{ $data->user_id }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan Username" value="{{ $data->username }}">
            <br>
            
            <label>Nama</label>
            <input type="text" name="name" placeholder="Masukkan Nama" value="{{ $data->name }}">
            <br>
            
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan Password" value="{{ $data->password }}">
            <br>
            
            <label>Level ID</label>
            <input type="text" name="level_id" placeholder="Masukkan Level ID" value="{{ $data->level_id }}">
            <br><br>
            <input type="submit" class="btn btn-submit" value="Ubah Data">
        </form>
    </body>
</html>