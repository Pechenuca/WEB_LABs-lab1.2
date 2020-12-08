function checkForm() {

    let err = {
        "x": false,
        "y": false,
        "r": false
    }

    let xNotValue = document.querySelector('.checkboxX:checked');
    let y = document.getElementById('inputY').value;
    let rNotValue = document.querySelector('.checkboxR:checked');

    if (xNotValue != null) {
        let x = xNotValue.value
        if (x != "") {
            if (x >= -5 && x <= 5) {
                console.log("x is ok")
            } else {
                console.log("u r fuck up with interval on x")
                err['x'] = true
            }
        } else {
            console.log("check x value")
            err['x'] = true
        }
    } else {
        err['x'] = true
    }

    if (y != "") {
        if (y >= -5 && y <= 5) {
            console.log("y is ok")
        } else {
            console.log("u r fuck up with interval on y")
            err['y'] = true
        }
    } else {
        console.log("check y value")
        err['y'] = true
    }

    if (rNotValue != null) {
        let r = rNotValue.value
        if (r != "") {
            if (r >= -5 && r <= 5) {
                console.log("r is ok")
            } else {
                console.log("u r fuck up with interval on r")
                err['r'] = true
            }
        } else {
            console.log("check r value")
            err['r'] = true
        }
    } else {
        err['r'] = true
    }

    if (err['x'] == false && err['y'] == false && err['r'] == false) {

        // do some shit with php
        sendRequest("https://se.ifmo.ru/~s282351/handler.php", xNotValue.value, y, rNotValue.value)

    } else {
        if (err['x'] == true) {
            alert('Problems with x')
        }

        if (err['y'] == true) {
            alert('Problems with y')
        }

        if (err['r'] == true) {
            alert('Problems with r')
        }
    }

}

function selectOnlyThisx(id) {
    for (let i = 1; i <= 11; i++) {
        document.getElementById("xCheck" + i).checked = false;
    }

    document.getElementById(id).checked = true;
}

function selectOnlyThisr(id) {
    for (let i = 1; i <= 9; i++) {
        document.getElementById("rCheck" + i).checked = false;
    }

    document.getElementById(id).checked = true;
}

function sendRequest(uri, x, y, r) {
    window.location.replace(uri + "?x=" + x + "&y=" + y + "&r=" + r);
}

// function checkUrlParams() {
//     let oldUrl = window.location.href.split("?")[0]
//     let pathArray = window.location.href.split("?")[1]
//     if (pathArray != undefined) {
//         console.log(pathArray.split('&'))
//         let x = pathArray.split('&')[0].split('=')[1]
//         let y = pathArray.split('&')[1].split('=')[1]
//         let r = pathArray.split('&')[2].split('=')[1]
//         let time = pathArray.split('&')[3].split('=')[1]
//         let message = pathArray.split('&')[4].split('=')[1]
//         window.location.href = oldUrl;

//         let oldSession = sessionStorage.getItem('values')

//         if (oldSession != null){
//             newSession = oldSession + ',' + x + ',' + y + ',' + r + ',' + time + ',' + message
//             sessionStorage.setItem('values', newSession);
//             addResultRow()
//         } else {
//             sessionStorage.setItem('values', [ x, y, r, time, message ]);
//             addResultRow()
//         }
        
//     }

// }

// window.onload = function() {
//     checkUrlParams()
// }


// function addResultRow() {

//     console.log(sessionStorage.getItem('values'))

//     let tr = document.createElement('tr');
//     let d = new Date()

    

//     tr.innerHTML = `
//         <th class="inRes">${d}</th>
//         <th class="inRes">${time}</th>
//         <th class="inRes">${x}</th> 
//         <th class="inRes">${y}</th>
//         <th class="inRes">${r}</th>
//         <th class="inRes">${message}</th>
//         `

//     document.getElementById('tableResults').appendChild(tr);
//     console.log(document.getElementById('tableResults'))
// }