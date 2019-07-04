let data=null;

const events = new XMLHttpRequest();
events.onload = function() {
    const parseddata= JSON.parse(events.responseText);
    data=parseddata;
    console.log(parseddata);
    displayevents(parseddata)
}

events.open('GET', 'http://localhost:8080/events/all');

events.send();

function displayevents(data) {
    document.getElementById("name").innerHTML = data[0].name;
    document.getElementById("datetime").innerHTML = data[0].datetime;
    document.getElementById("eventtype").innerHTML = data[0].eventtype;
    document.getElementById("details").innerHTML = data[0].details;
    document.getElementById("name1").innerHTML = data[1].name;
    document.getElementById("datetime1").innerHTML = data[1].datetime;
    document.getElementById("eventtype1").innerHTML = data[1].eventtype;
    document.getElementById("details1").innerHTML = data[1].details;
}