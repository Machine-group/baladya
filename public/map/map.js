var tab_s = [];

var id = 0;
var idDel=0;
var info = L.control();
var detect = false ;
var gov_name ="";
var del_name ="";
var sect_name = "";

var search = false ;
var modeGov = false ;

var idSearch= 0;
var idSearchDel= 0;
var idSearchSect= 0;



var lst_gov=[];
var lst_del=[];
var lst_sect=[];


info.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
    this.update();
    return this._div;
};

// method that we will use to update the control based on feature properties passed
info.update = function (props) {
    if(idDel == 0){
    this._div.innerHTML = '<h4>Gouvernorat</h4>' +  (props ?
        '<b>' + props.gov_name_f + '</b>'
        : '');
    }else{
        this._div.innerHTML = '<h4>Gouvernorat</h4>' +  (props ?
        '<b>' + gov_name + '</b>'+' > '+
        '<b>' + del_name + '</b>'
        : '');

    }
};


        function getRandomColor(e) {
            var color;
            if(e == 1){
            var color = randomColor({hue: 'orange'});
            }else{
            color="#5b5b5b"    
            }    
            return color;

        }


        function style(feature) {
         return {
        fillColor: getRandomColor(1),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
         };
        }

        function styleDel(feature) {
           
        var i = 2;    
        if(search && modeGov == false ){
            if(feature.properties.code_deleg == idSearchDel && feature.properties.gov_id == idSearch ){
                i=1;

            }else{
                i=2;
            }
        }else{
        if(feature.properties.gov_id == id ){
            i = 1 ;
        }else if(id == 0 ){
            i = 1;
        }
        }


         return {
        fillColor: getRandomColor(i),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
         };
        }

        function styleSect(feature) {
          
        var i = 2;    
       // alert(checkSect(feature.properties.C_SECT));
        if(checkSect(feature.properties.C_SECT) == true ){
            alert("true !");
            i = 1 ;
        }


         return {
        fillColor: getRandomColor(i),
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
         };
        }

        function styleSelectSect(feature) {
         return {
        fillColor: '#fff0',
        weight: 2,
        opacity: 1,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
         };
        }

function checkSect(code) {
    for (var i = 0; i < tab_s.length; i++) {
        if(tab_s[i] == code){
            alert("found ! ");
            return true;
        }

    }
    return false;
    
   
}       

function highlightFeature(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 5,
        color: '#666',
        dashArray: '',
        fillOpacity: 0.7
    });
    

    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layer.bringToFront();
    }
}

function resetHighlight(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 2,
        color: 'white',
        dashArray: '3',
        fillOpacity: 0.7
    });
    
    
}

function zoomToFeature(e) {
    detect = false ;
    var layer = e.target;
    map.fitBounds(e.target.getBounds());
    id = layer.feature.properties.gov_id;
    data2.setStyle(styleDel);
    map.removeLayer(data); 
    map.addLayer(data2); 
    gov_name = layer.feature.properties.gov_name_f;
    info.update(layer.feature.properties);
    //setSelectGov(layer.feature.properties.gov_id);
}
function zoomToFeatureDel(e) {
    detect = false ;
    var layer = e.target;
    map.fitBounds(e.target.getBounds());
    idDel = layer.feature.properties.code_deleg;
    var n = id.toString()+layer.feature.properties.code_deleg.toString();
    idDel = parseInt(n);
    //alert(idDel);
    data3.setStyle(styleSect);
    map.removeLayer(data2); 
    map.addLayer(data3); 

    del_name = layer.feature.properties.name_2;
    info.update(layer.feature.properties);
   
}

function zoomToFeatureSect(e) {
    detect = false ;
    var layer = e.target;
    map.fitBounds(e.target.getBounds());
    layer.setStyle(styleSelectSect);

   
}

function onEachFeature(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight,
        click: zoomToFeature
    });
    if(search == true){
        if(feature.properties.gov_id == idSearch){
        map.fitBounds(layer.getBounds());
        //search = false ;
        
        }

    }
}


function onEachFeatureDel(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight,
        click: zoomToFeatureDel
    });

    if(search == true){
        if(feature.properties.code_deleg == idSearchDel && feature.properties.gov_id == idSearch ){
        map.fitBounds(layer.getBounds());
        //search = false ;
        }

    }
}

function onEachFeatureSect(feature, layer) {
    layer.on({
        mouseover: highlightFeature,
        mouseout: resetHighlight,
        click: zoomToFeatureSect
    });
    if(search == true){
        if(feature.properties.C_SECT == idSearchSect){
        map.fitBounds(layer.getBounds());
        search = false ;
        }

    }
    
}



function searchGov(code){
    //alert("search");
    idSearch = code;
    id = code;
    search = true;
    modeGov = true ;
    data = L.geoJson(gov , {style: style , onEachFeature: onEachFeature});
    clearL();
    map.addLayer(data);  
    data2.setStyle(styleDel);
    clearL();
    map.addLayer(data2); 
     
}

function searchDel(code){
    
    idSearchDel = code - (Math.trunc(code /100 ) * 100);
    idSearch = Math.trunc(code /100 );
   // alert("search gov "+idSearch+" del: "+idSearchDel);
    search = true;
    data2 = L.geoJson(del , {style: styleDel , onEachFeature: onEachFeatureDel});
    clearL();
    map.addLayer(data2);   
    
    idDel = code;
    data3.setStyle(styleSect);
    clearL();
    map.addLayer(data3); 
    search = false ;
}

function searchSect(code){
    //alert("search");
    idSearchSect = code;
    search = true;
    data3 = L.geoJson(sect , {style: styleSect , onEachFeature: onEachFeatureSect});
    clearL();
    map.addLayer(data3);   
}



function searchSectM(){
    //alert("search");
    //idSearchSect = code;
    alert(tab_s.toString());
    search = true;
    data3 = L.geoJson(sect , {style: styleSect , onEachFeature: onEachFeatureSect});
    clearL();
    map.addLayer(data3);   
}

function clearL(){
    var i = 0;
    map.eachLayer(function (layer) {
        if(i > 0){
        map.removeLayer(layer);
        
        }
        i++;
    });
}

function setSelectGov(code){
   alert("selecting "+code);
    var sel = document.getElementById('cbx_gov');
     /*
    for(var i = 0, j = sel.options.length; i < j; ++i) {
        if(sel.options[i].value === code) {
           sel.selectedIndex = i;
           break;
        }
    }
    */
    for(var i = 0, j = lst_gov.length; i < j; ++i) {
        if(lst_gov[i].Code_Gov === code) {
            alert("index foun : "+i);
           sel.selectedIndex = i+1;
           break;
        }
    }
}

function setJsData(data){
    alert("getting data");
    lst_gov = data;
}


