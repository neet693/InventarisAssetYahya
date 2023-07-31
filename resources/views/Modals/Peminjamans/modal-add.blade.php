<div class="col-md-6 col-12">
    <div class="card">
        <!--scrolling content Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal Form Peminjaman Barang / Asset
                        </h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="modal-body">
                                <label>Jenis Barang / Asset: </label>
                                <div class="form-group">
                                    <select class="choices form-select multiple-remove" multiple="multiple">
                                        <optgroup label="Pilih Barang / Asset">
                                            @foreach ($assets as $asset)
                                                <option value="{{ $asset->id }}"selected>
                                                    {{ $asset->nama }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <label>Unit Peminjam: </label>
                                <div class="form-group">
                                    <select class="choices form-select multiple-remove">
                                        <optgroup label="Unit Peminjam">
                                            @foreach ($units as $unit)
                                                <option value="{{ $unit->id }}"selected>
                                                    {{ $unit->nama }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <label>Tanggal Pembelian: </label>
                                <div class="form-group">
                                    <input type="date" class="form-control mb-3 flatpickr-no-config"
                                        placeholder="Pilih Tanggal Pinjam" />
                                </div>
                                <label>Nama Peminjam: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Tulis Nama Peminjam" class="form-control">
                                </div>
                                <label>Tanggal Pengembalian:</label>
                                <div class="form-group">
                                    <input type="date" class="form-control mb-3 flatpickr-no-config"
                                        placeholder="Pilih Tanggal Pengembalian" />
                                </div>
                                <label>Status Peminjaman Barang / Asset: </label>
                                <div class="form-group">
                                    <select class="choices form-select multiple-remove">
                                        <option value="" {{ old('status_peminjaman') === '' ? 'selected' : '' }}>

                                        </option>
                                        <option value="dipinjam"
                                            {{ old('status_peminjaman') === 'perlu pemeriharaan' ? 'selected' : '' }}>
                                            Dipinjam
                                        </option>
                                        <option value="dikembalikan"
                                            {{ old('status_peminjaman') === 'dikembalikan' ? 'selected' : '' }}>
                                            Dikembalikan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Tambah</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
