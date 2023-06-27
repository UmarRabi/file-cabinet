<footer style="position:relative;bottom:0;">
    <div class="row justify-content-end">
        @if (Auth::user())
            <div class="col-7">
                <form class="d-flex justify-content-end">
                    <a class="btn btn-outline-success" type="submit">
                        <svg width="30" height="32" viewBox="0 0 30 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15 24.381C12.9187 24.381 11.25 23.0095 11.25 21.3333C11.25 19.6419 12.9187 18.2857 15 18.2857C15.9946 18.2857 16.9484 18.6068 17.6516 19.1783C18.3549 19.7499 18.75 20.5251 18.75 21.3333C18.75 22.1416 18.3549 22.9168 17.6516 23.4883C16.9484 24.0599 15.9946 24.381 15 24.381ZM26.25 28.9524V13.7143H3.75V28.9524H26.25ZM26.25 10.6667C27.2446 10.6667 28.1984 10.9878 28.9016 11.5593C29.6049 12.1308 30 12.906 30 13.7143V28.9524C30 29.7607 29.6049 30.5358 28.9016 31.1074C28.1984 31.6789 27.2446 32 26.25 32H3.75C1.66875 32 0 30.6286 0 28.9524V13.7143C0 12.0229 1.66875 10.6667 3.75 10.6667H5.625V7.61905C5.625 5.59835 6.61272 3.66042 8.37087 2.23157C10.129 0.802719 12.5136 0 15 0C16.2311 0 17.4502 0.197073 18.5877 0.579966C19.7251 0.962858 20.7586 1.52407 21.6291 2.23157C22.4997 2.93906 23.1902 3.77898 23.6614 4.70336C24.1325 5.62775 24.375 6.6185 24.375 7.61905V10.6667H26.25ZM15 3.04762C13.5082 3.04762 12.0774 3.52925 11.0225 4.38656C9.96763 5.24387 9.375 6.40663 9.375 7.61905V10.6667H20.625V7.61905C20.625 6.40663 20.0324 5.24387 18.9775 4.38656C17.9226 3.52925 16.4918 3.04762 15 3.04762Z"
                                fill="#061E5C" />
                        </svg>
                        <br>
                        <span class="blue-text">
                            Change Password
                        </span>
                    </a>

                    <a href="{{ route('logout') }}" class="btn btn-blue bg-blue" style="">
                        <span>
                            Logout
                        </span>
                    </a>
                </form>
            </div>
        @endif
        <div class="col-1">

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>



</footer>
