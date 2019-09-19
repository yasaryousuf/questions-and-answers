                @if (session('message'))
                <script>
                  $(document).ready(function() {
                    toastr.success("<?= session('message') ?>")
                  });
                </script>
                    {{-- <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div> --}}
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif  