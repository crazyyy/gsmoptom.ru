//������������ � ������� �� ������ �� �������� �������

function map1_start(typeto){//������ ������ ����� �����������
	r='';
	d=$('#dostavka_calc #city_ot').val().split('|||');
	if (d!=''){
		if (typeto=='cat_id'){
			r=d[0];
		}else if (typeto=='id'){
			r=d[1];
		}else if (typeto=='name'){
			r=d[2];
		}else{
			d2=d[2];//� �������
			r=[d2];
		}
	}
	return r;
}
function map1_finish(typeto){//������ �������� ����� �����������
	r='';
	if ($('#city_do_list a#act').length){
		d=$('#city_do_list a#act').attr('rel').split('|||');
		if (typeto=='id'){
			r=d[0];
		}else if (typeto=='key'){
			r=d[1];
		}else if (typeto=='name'){
			r=d[2];
		}
	}
	return r;
}

function map1_index_start(typeto){//������ ������ ����� �����������
	r='';
	d=$('#dostavka_calc_index #city_ot').val().split('|||');
	if (d!=''){
		if (typeto=='cat_id'){
			r=d[0];
		}else if (typeto=='id'){
			r=d[1];
		}else if (typeto=='name'){
			r=d[2];
		}else{
			d2=d[2];//� �������
			r=[d2];
		}
	}
	return r;
}
function map1_index_finish(typeto){//������ �������� ����� �����������
	r='';
	if ($('#dostavka_calc_index #city_do').length){
		val=$('#dostavka_calc_index #city_do').val()
		if (val!=''){
			d=val.split('|||');
			if (typeto=='id'){
				r=d[0];
			}else if (typeto=='key'){
				r=d[1];
			}else if (typeto=='name'){
				r=d[2];
			}
		}
	}
	return r;
}