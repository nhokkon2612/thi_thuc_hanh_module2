<form method="post" enctype="multipart/form-data">
    <div class="card" style="width: 50rem;top: 20px;">
        <div>
            <label>TenSP</label>
            <input type="text" name="Ten">
        </div>
        <div>
            <label >LoaiSP</label>
            <input type="text" name="LoaiSP">
        </div>
        <div>
            <label>Gia</label>
            <input type="text" name="Gia">
        </div>
        <div>
            <label>So Luong SP</label>
            <input type="number" name="SoLuong">
        </div>
        <div>
            <label>Ngay</label>
            <input type="date" name="Ngay">
        </div>
        <div>
            <label>Mo Ta San Pham</label>
            <input type="text" name="MoTa">
        </div>
    </div>
    <div style="margin-top: 20px">
        <button class="btn btn-outline-success" type="submit" style="top:">Thêm</button>
        <button class="btn btn-outline-secondary" onclick="window.history.go(-1); return false;" type="submit">Huỷ
        </button>
    </div>
</form>