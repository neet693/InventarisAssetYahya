<div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Form Tambah Barang</h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <form action="#">
                <div class="modal-body">
                    <label>Nama Barang / Asset: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Nama Barang" class="form-control">
                    </div>
                    <label>Jenis Barang / Asset: </label>
                    <div class="form-group">
                        <select class="choices form-select multiple-remove" multiple="multiple">
                            <optgroup label="Figures">
                                <option value="romboid">Romboid</option>
                                <option value="trapeze" selected>Trapeze</option>
                                <option value="triangle">Triangle</option>
                                <option value="polygon">Polygon</option>
                            </optgroup>
                            <optgroup label="Colors">
                                <option value="red">Red</option>
                                <option value="green">Green</option>
                                <option value="blue" selected>Blue</option>
                                <option value="purple">Purple</option>
                            </optgroup>
                        </select>
                    </div>
                    <label>Nama Barang: </label>
                    <div class="form-group">
                        <input type="text" placeholder="Nama Barang" class="form-control">
                    </div>
                    <label>Password: </label>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
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
