<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 01</title>
</head>
<body>
    
    <form name="Latihan01" method="POST" onsubmit="return checkform(this)">
        <div>
            NIM
            <input type="text" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" name="txNAMA">
        </div>
         <div>
            Jenis Kelamin
            <input type="radio" name="txJK" value="L">Laki-Laki
            <input type="radio" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
                <option value="DGM">DGM</option>
                <option value="TIPAR">TIPAR</option>
                <option value="SK">SK</option>
           
            </select>
        <div>
           Hobi
           <input type= "checkbox" name="musik">Musik
           <input type= "checkbox" name="tari">Tari
           <input type= "checkbox" name="membaca">Membaca
           <input type= "checkbox" name="tidur">Tidur
           <input type= "checkbox" name="joging">Joging
           <input type= "checkbox" name="lari">Lari
           <input type= "checkbox" name="menangis">Menangis
        </div>

        <div>
            <button type="submit"> Kirim Data </button>
        </div>
    </form>

    <script>
        function checkform(frm){
            let f = frm.elements;
            let nim = f.namedItem("txNIM").value;
            let nama = f.namedItem("txNAMA").value;
            let jeniskelamin= f.namedItem("txJK").value;
            let jurusan= f.namedItem("txJURUSAN").value;
            let hobi_musik= f.namedItem("musik").checked;
            let hobi_tari= f.namedItem("tari").checked;
            let hobi_membaca= f.namedItem("membaca").checked;
            let hobi_tidur= f.namedItem("tidur").checked;
            let hobi_joging= f.namedItem("joging").checked;
            let hobi_lari= f.namedItem("lari").checked;
            let hobi_menangis= f.namedItem("menangis").checked;
            
            
            console.log("NIM: "+nim);
            console.log("NAMA: "+nama);
            console.log("JENIS KELAMIN: "+jeniskelamin);
            console.log("JURUSAN: "+jurusan);
            console.log("HOBI_MUSIK: "+hobi_musik);
            console.log("HOBI_TARI: "+hobi_tari);
            console.log("HOBI_MEMBACA: "+hobi_membaca);
            console.log("HOBI_TIDUR: "+hobi_tidur);
            console.log("HOBI_JOGING: "+hobi_joging);
            console.log("HOBI_LARI: "+hobi_lari);
            console.log("HOBI_MENANGIS: "+hobi_menangis);
            return false;

        }
    </script>
</body>
</html>