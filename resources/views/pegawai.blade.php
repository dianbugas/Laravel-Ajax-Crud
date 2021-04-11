<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h3>Data Pegawai</h3>
        </div>
        <div class="card-body">
            <table id="table_pegawai" class="table table-striped table-bordered table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table_pegawai').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('pegawais.index') }}",
                type: 'GET'
            },
            columns: [{
                    data: 'nama_pegawai',
                    name: 'nama_pegawai'
                },
                {
                    data: 'jenis_kelamin',
                    name: 'jenis_kelamin'
                },
                {
                    data: 'alamat',
                    name: 'alamat'
                },
                {
                    data: 'email',
                    name: 'email'
                },
            ],
            order: [
                [0, 'asc']
            ]
        });
    });

</script>
