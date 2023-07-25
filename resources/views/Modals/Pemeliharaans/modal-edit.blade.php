<div class="col-md-6 col-12">
    <div class="card">
        <!--scrolling content Modal -->
        <div class="modal fade" id="editModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="editModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalScrollableTitle">Modal Form Edit Asset</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <i data-feather="x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="#">
                            <div class="modal-body">
                                <label>Nama Barang / Asset: </label>
                                <div class="form-group">
                                    <input type="text" id="nama" name="nama" placeholder="Nama Barang"
                                        class="form-control">
                                </div>
                                <label>Kode Barang / Asset: </label>
                                <div class="form-group">
                                    <input type="text" id="kode" name="kode" placeholder="Kode Barang"
                                        class="form-control">
                                </div>
                                <label>Tanggal Pembelian: </label>
                                <div class="form-group">
                                    <input type="date" class="form-control mb-3 flatpickr-no-config"
                                        placeholder="Pilih Tanggal Beli" />
                                </div>
                                <label>Deskripsi: </label>
                                <div class="form-group">
                                    <input type="text" placeholder="Tambah deskripsi" class="form-control">
                                </div>
                                {{-- <label>Kondisi Barang / Asset: </label>
                                <div class="form-group">
                                    <select class="choices form-select multiple-remove">
                                        <option value="baik" {{ old('kondisi') === 'baik' ? 'selected' : '' }}>
                                            Baik
                                        </option>
                                        <option value="perlu pemeliharaan"
                                            {{ old('kondisi') === 'perlu pemeriharaan' ? 'selected' : '' }}>
                                            Perlu Pemeliharaan
                                        </option>
                                        <option value="rusak" {{ old('kondisi') === 'rusak' ? 'selected' : '' }}>
                                            Rusak</option>
                                    </select>
                                </div>
                                <label>Jenis Barang / Asset: </label>
                                <div class="form-group">
                                    <select class="choices form-select multiple-remove" multiple="multiple">
                                        <optgroup label="Jenis Asset">
                                            @foreach ($jenis_assets as $jenis_asset)
                                                <option value="{{ $jenis_asset->id }}"selected>
                                                    {{ $jenis_asset->nama }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <label>Lokasi Barang / Asset: </label>
                                <div class="form-group">
                                    <select class="choices form-select multiple-remove" multiple="multiple">
                                        <optgroup label="Jenis Asset">
                                            @foreach ($lokasis as $lokasi)
                                                <option value="{{ $lokasi->id }}"selected>{{ $lokasi->nama }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div>
                                <label>Unit: </label>
                                <div class="form-group">
                                    <select class="choices form-select multiple-remove" multiple="multiple">
                                        <optgroup label="Unit">
                                            @foreach ($units as $unit)
                                                <option value="{{ $unit->id }}"selected>
                                                    {{ $unit->nama }}
                                                </option>
                                            @endforeach
                                        </optgroup>
                                    </select>
                                </div> --}}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Close</span>
                                </button>
                                <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Update</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
