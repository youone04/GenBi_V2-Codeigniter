function validasi(form){
	var juduls = document.getElementById('judul').value;
	var teks = document.getElementById('text').value;
	var lampirans = document.getElementById('lampiran').value;
	var notes = document.getElementById('note');
	var notes2 = document.getElementById('note2');
	var notes3 = document.getElementById('note3');
	var notes4 = document.getElementById('note4');
	var jteks = teks.split("");

	if(juduls == ""){
		notes.innerHTML = '<div class="alert alert-warning" role="alert"> Kolom Judul Tidak Boleh Kosong!</div>';
		return false;
	}else if(teks == ""){
		notes2.innerHTML = '<div class="alert alert-warning" role="alert"> Kolom Text Tidak Boleh Kosong!</div>';
		return false;
	}else if(lampirans == ""){
		notes3.innerHTML = '<div class="alert alert-warning" role="alert"> Kolom Lampiran Tidak Boleh Kosong!</div>';
		return false;
	}else if(jteks.length < 10){
		notes4.innerHTML = '<div class="alert alert-warning" role="alert"> Teks Harus Berisi Minimal 10 Kata!</div>';
		return false;
	}
	else{
		return true;
	}
}