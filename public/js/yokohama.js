function meter_converter(meter){
    return meter / 1000;
}
function average_temp(min,max){
    avg = (min + max) / 2
    return avg - 273.15;
}
    


$.post("/api/weather_data?city=yokohama",function(data){
    var data_obj = jQuery.parseJSON(data);
    
    //get wh
    
    //console.log(data_obj[0])

    //checking id length of the array is more than 4

    for (let i = 0; i <= 7; i++){
        var icon = "https://openweathermap.org/img/wn/"+data_obj[0][i]['weather'][0]['icon'].toString()+"@2x.png";
        var weather_main = data_obj[0][i]['weather'][0]['main'];
        $("#f"+i.toString()).text(formatDate(data_obj[0][i]['dt_txt']))
        $("#weather_icon_"+i.toString()).attr("src",icon);
        $("#weather_main_"+i.toString()).text(data_obj[0][i]['weather'][0]['description'].toUpperCase())
        $("#humidity"+i.toString()).text(data_obj[0][i]['main']['humidity']+"% Humidity")
        $("#clouds"+i.toString()).text(data_obj[0][i]['clouds']['all']+"% Clouds")
        var temp = average_temp(data_obj[0][i]['main']['temp_min'],data_obj[0][i]['main']['temp_max']);
        $("#temperature"+i.toString()).text(temp.toFixed(2).toString()+"°c Average Temperature")
        $("#wind_speed"+i.toString()).text(data_obj[0][i]['wind']['speed']+"m/sec wind speed")
    }


    //card  1

    

});
