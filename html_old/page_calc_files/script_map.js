function init(){
    var myMap=new ymaps.Map('map1_api',{
		center:[55.6313,51.8144],//��
		zoom:7,
		type:'yandex#map',
		//behaviors:['default','scrollZoom'],
		controls:[]
	});
	myMap.controls
	//.add('searchControl')//�����
	.add('zoomControl',{})//����������
	.add('typeSelector')//������,�����,���
	//.add('mapTools');

	//https://tech.yandex.ru/maps/doc/jsapi/2.0/ref/reference/map.behavior.Manager-docpage/
	myMap.behaviors.disable('scrollZoom');//���������� ������������ ���������� ����
	myMap.behaviors.disable('dblClickZoom');//��������� ������� ����
	
	multiRoute = new ymaps.multiRouter.MultiRoute({
		referencePoints:[
			//"����������","������"//������ ������ ��� �� �� �������
			"",""
		],
		params:{
			//������������ ���������� ���������, ������� ������ �������������. (�.�. ����� ������ ��������� �������������� ������� ��������)
			results:1,
		}
	},{
		editorMidPointsType:'way',//���������� ��� ����������� ����� ��� �������������� �������, ������������� ��� ��������� ������� ���� �� �������� �������. 
	
		// ������ ����������� ���������� ����� ��������������.
		routeStrokeColor: "000088",
		routeActiveStrokeColor: "ff0000",
		pinIconFillColor: "ff0000",
		// ������������� ������������� ������� ����� ���,����� ������� ��� ����� �������.
		boundsAutoApply:true,
		zoomMargin:10,


		//����������� ����������� ����� � �����
		wayPointStartIconLayout: "default#image",
		wayPointStartIconImageHref: '/option/plugin/yandexmapdostavka/option/start_point.png',
		wayPointStartContentSize: [10, 10],
		wayPointStartIconImageSize: [26, 46],
		wayPointStartIconImageOffset: [-25, -46],
		wayPointFinishIconLayout: "default#image",
		wayPointFinishIconImageHref: '/option/plugin/yandexmapdostavka/option/finish_point.png',
		wayPointFinishContentSize: [10, 10],
		wayPointFinishIconImageSize: [26, 46],
		wayPointFinishIconImageOffset: [-25, -46],

		/*
		option:{
		}
		*/
		// ��� ������������� �����, ������� ����� ���� ��������� ��� ��������������.
		//editorMidPointsType: "via",
		// � ������ ���������� ����� ������� ����� ��������� ������� ����� ������ ��������  ����.
		//editorDrawOver: false,
	});

	/*
	//https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/control.SearchControl-docpage/
	var search = new ymaps.control.SearchControl({
			useMapBounds:true,
			noCentering:true,
			noPopup:true,
			noPlacemark:true,
			placeholderContent:'����� �������� �����',
			size:'large',
			float:'none',
			provider:'yandex#publicMap',
			position:{left:10,top:44},
	});
	myMap.controls.add(search,{right:5,top:5});
    search.events
		.add('resultselect',function(e){
			search.hideResult(0);//������ �����1 (���������)

			var results = search.getResultsArray(),
			selected = e.get('index'),
			point = results[selected].geometry.getCoordinates();
			
			//multiRoute.model.setReferencePoints([
				//map1_start(),point
			//]);
		})
		.add('resultshow',function(e){
			//alert('d');
			search.hideResult(0);//������ �����1 (���������)
			
			var results = search.getResultsArray(),
			selected = e.get('index'),
			point = results[selected].geometry.getCoordinates();
			
			//alert(point);
			multiRoute.model.setReferencePoints([
				map1_start(),point
			]);
		})
		.add('load',function(event){
			search.hideResult(0);
			// �� ���� skip ����������, ��� ��� �� ���������� ������.
			// �� getRusultsCount ����������, ��� ���� ���� �� 1 ���������.
			//if (!event.get('skip') && search.getResultsCount()){
				//search.showResult(0);//������ �����1 (���������)
			//}
		});
	*/
	
	//addWayPoints - ��������� ���������� ����� ������� ����� ��� ����� �� �����. �������� �� ���������: false.
	//removeWayPoints - ��������� �������� ������� ����� ��� ������� ����� �� ���. �������� �� ���������: false.
	//https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.Editor-docpage/
	multiRoute.editor.start({
		addWayPoints:false,//��������� ���������� ����� ������� ����� ��� ����� �� �����(������ false ��� ������ ������������ ���������� ���������� Click)
		dragWayPoints:false,//��������� �������������� ��� ������������ ������� �����
		removeWayPoints:false,//��������� �������� ������� ����� ��� ������� ����� �� ���
		addMidPoints:false,
	});
	/*
	 * ��������� ������ ��������������.
	 * � �������� ����� ����� ���� ������� ����� � ������:
	 * dragWayPoints - ��������� �������������� ��� ������������ ������� �����. �������� �� ���������: true.
	 * dragViaPoints - ��������� �������������� ��� ������������ ���������� �����. �������� �� ���������: true.
	 * removeViaPoints - ��������� �������� ���������� ����� ��� ������� ����� �� ���. �������� �� ���������: true.
	 * addMidPoints - ��������� ���������� ������������� ���������� ��� ������� ����� ����������� �������������� �������, ������������� ��� ��������� ������� ���� �� �������� �������. ��� ����������� ����� �������� ������ midPointsType. �������� �� ���������: true
	 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRoute.xml#editor
	 */
	 
	 myMap.geoObjects.add(multiRoute);
	 //myMap.setBounds(multiRoute.getBounds());
	 
	 //multiRoute.model.setParams({
	 //});
	 
	//������ ������� �����

	var myCollection = new ymaps.GeoObjectCollection();

	myMap.events.add('click',function(e){
		//�������� ����
		$('#dostavka_calc #step_2').hide();
		$('#dostavka_calc #step_3').hide();

		$('#dostavka_calc #city_do_list a').attr('id','');//������� ���������� ������ ������ ��������

		coords=e.get('coords');
		//console.log(coords);

		//alert(map1_start());
		//multiRoute.model.destroy();
		multiRoute.model.setReferencePoints([
			map1_start(),coords
		]);

		$('#dostavka_calc #city_do_list a').attr('id','');//������� ���������� ������ ������ ��������
		$('#dostavka_calc #city_do').val('');
		$('#dostavka_calc #reis_id').val('');
	});
	
	/*
	//https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRoute-docpage/
	multiRoute.add("click", function (event) {
		alert('d');
	});
	*/
	
	multiRoute.model.events.add("requestsend",function(){
		$('#map1 #loader').show();
	});
	
	//https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/router.ViaPoint-docpage/
	multiRoute.events.add("dragstart",function(e){//�������������� �������
		//target=e.get('target');
		//coord=target.geometry.getBounds();
		//console.log(coord);
		
		//����� ������� ����� ��� �������������� ��������� ����� ������ preventDefault()
		
		$('#dostavka_calc #city_do_list a').attr('id','');//������� ���������� ������ ������ ��������
		$('#dostavka_calc #city_do').val('');
		$('#dostavka_calc #reis_id').val('');
	});
	
	/*
	multiRoute.events.add("click",function(){
	});
	*/

	//https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRouteModel-docpage/
	multiRoute.model.events.add("requestsuccess",function(event){
		map1_way_i++;//������� ��� ������������� (�.�. ���� ����� �� ����������, � � � ������� ������������� �����)
		//console.log(map1_way_i);

		myCollection.removeAll();

		$('#map1 #loader').hide();
		
		if (map1_way_i==1){//������ ����� ������ �������� ������ ���� ����������
			//multiRoute.model.setReferencePoints([
				//"����������",
			//]);
			$('#dostavka_calc #city_ot').trigger('change');
		}else{
			if (map1_way_i>=3){
				if ($('.city_list_footer').length){
					$('.city_list_footer').css({'visibility':'hidden'});
					//alert('d');
				}
			}
			
			//====================
			//���������� ���� �������� ����� (���� ���� �� ����� 5)
			//var WayPoint2=multiRoute.getWayPoints().getBounds();
			//coords=WayPoint2[1];

			var WayPoint2=multiRoute.model.getReferencePoints();//��� �� �������� �� ����� ������� � ���������� (latlong ��� �������� ���������)
			var WayPoint3=multiRoute.getWayPoints().getBounds();//���������� ���� �����(������� � �������, �� ��������� ������ ��� ������ � ��� �����)
			//var WayPoint2=multiRoute.getWayPoints().get(0);//��� �� �������� �� ����� ������� � ���������� (latlong ��� �������� ���������)

			//var WayPoint2=multiRoute.getPoints().get(n);
			//console.log(WayPoint3);
			
			//====================
		
			if (WayPoint2.length==1){
				myMap.setCenter(WayPoint3[0],7);//�� ������ ��

				map1_city_do_list();
			}else{
				var WayPoints = multiRoute.getWayPoints();//�������
				var n=WayPoints.getLength()-2;//������ �������� (������ �� 0)
				var WayPoint=multiRoute.getRoutes().get(n);
				//console.log(WayPoint);
				//console.log(n);

				//https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.masstransit.RouteModel-docpage/
				var distance=Math.round(WayPoint.properties.get("distance").value/1000);
				//console.log(distance);
				//console.log(multiRoute.getRoutes().get(n).getPaths());
				
				//����� ������
				function map1_ballonshow(coords){
					var balloonContentHeader='';
					if ($('#dostavka_calc #city_do').val()!=''){
						balloonContentHeader='<div id=map1_balloonContentHeader style="font-size:21px;color:#333;">'+map1_start('name')+' - '+map1_finish('name')+'</div>';
					}
					//var LayoutClass = ymaps.templateLayoutFactory.createClass(
						//'{{ properties.header|default:"���������" }}'
					//);
					//console.log(coords);
					//����� ���������
					var myPlacemark = new ymaps.Placemark(coords,{
						balloonContentHeader:balloonContentHeader,
						balloonContentBody: "<div id=map1_balloonContentBody style='font-size:16px;font-weight:bold;white-space:nowrap;'>���������� �������� - "+distance+" ��.</div>",
						balloonContentFooter:'<div style="text-align:center;"><button type=button class=button_next onclick="map1_move(\'step_2\');">�����</button></div>',
						//hintContent: "���� �����",
						//balloonOptions:{
							//offset:[-10,-50],
						//},
						
					},{
						iconLayout: 'default#image',
						iconImageHref:'/option/plugin/yandexmapdostavka/option/idef.png',
						iconImageSize:[21,21],
						iconImageOffset:[-11,-30],
						//preset: 'islands#greenCircleIcon'
						preset: "islands#blueStretchyIcon",
						//balloonContentLayout: LayoutClass ,
					});
					myCollection.add(myPlacemark);
					myMap.geoObjects.add(myCollection);	
					//https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/Balloon-docpage/
					myPlacemark.balloon.open('','',{
							offset:[-10,-50],//�������� ������
							//autoPan:false,
							//panelMaxMapArea:Infinity,
							minHeight:100,
						}
					);
				}

				geocoder=new ymaps.geocode(
					WayPoint2[1],{results:1}
				);
				geocoder.then(
					function(res){
						coords=res.geoObjects.get(0).geometry.getCoordinates();
						//name=res.geoObjects.get(0).properties.get('name');
						
						//console.log(coords);
						map1_ballonshow(coords);

						$('#dostavka_calc #latlong').val(coords);
						$('#dostavka_calc #dist').val(distance);

						$('#dostavka_calc #step_2').show();
						
						//$('#dostavka_calc #step_2 button').trigger('click');
						
						console.log(map1_way_i);
						if (map1_way_i==3){
							map1_button_click();
						}
					}
				);

				//myMap.setCenter(coords);
			}
		}
	});
	
	//multiRoute.events.add("update",function(){
		//alert('d');
	//});
	
	//multiRoute.model.events.fire("requestsuccess");
	//https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/event.Manager-docpage
	multiRoute.model.events.once("requestchange",function(){
		//alert('d');
	});
	
	/*
	//https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/multiRouter.MultiRouteModel-docpage/
	// ������������� �� ������� ������ ��������������.
    multiRoute.model.events.add("requestsend", function (event) {
        iLog('���������� ������ �� �������, ������� �����...');
    });
    multiRoute.model.events.add("requestsuccess", function (event) {
        iLog('������� �������.');
        iLog('����� ����� �������� ����������: '+multiRoute.getRoutes().get(0).properties.get('distance').text); // ���� �������   .value

        // ����, ���� �������� ������� ����� ��������
        for(var i=0; i<jsonOut.length; i++) {
            console.log(multiRoute.getWayPoints().get(i).properties.get('distance'));
        }
        console.log(multiRoute.getRoutes().get(0).model);
        $("#route2").prop('disabled', false);
    });
	*/

/*
var coords = new ymaps.GeoPoint(37.609218,55.753559),
placemark = new ymaps.Placemark(coords);
placemark.name = "��� �����"; // ��������� ������
placemark.description = "�������� �����"; // ����� ������
myMap.addOverlay(placemark);	
*/

//https://tech.yandex.ru/maps/doc/jsapi/2.1/dg/concepts/geocoding-docpage/
/*
var objects = ymaps.geoQuery(ymaps.geocode('����������'))
//.add(ymaps.geocode('�����'))

objects.then(function (){
	objects.each(function (object) {
		coord=object.geometry.getCoordinates();
		name=object.properties.get('name');
		console.log(name);
	});
});
*/

//https://tech.yandex.ru/maps/doc/jsapi/2.1/ref/reference/util.cursor.Manager-docpage/
myMap.cursors.push('crosshair');
//crosshair-�������
//pointer-�����

$('#dostavka_calc .dial .content').css({'visibility':'visible'});
}

ymaps.ready(init);