const landProjectConst = 70,
      landFullConst = 2000,
      wateringInstallConst = 1200,
      fogInstallConst = 1300,
      greenInstallConst = 1000;
      lawnFertilizerConst = 500;
      lawnTrashConst = 1500;
      lawnSoilConst = 1500;
      lawnFullConst = 5500;
      lawnInstallConst = 2000;

    evroInDollar = 1.2;
    fanCost = 270*evroInDollar;
    forsunkaCost = 15.55*evroInDollar;
    kolcoCost = 130*evroInDollar;
    nasosCost = 1335.15*evroInDollar;
    krepezhCost = 1.28*evroInDollar;
    trubaCost = 5.35*evroInDollar;
    magistralCost = 5.1*evroInDollar;
    melochiCost = 30*evroInDollar;
      //1,2 - перевод из евро в доллар


let btnLand = document.querySelector('#calcdesign'),
    btnLawn = document.querySelector('#calc-lawn'),
    btnFog = document.querySelector('#calc-fog'),
    sum,
    sotka,
    landProject,
    landFull,
    wateringInstall,
    fogInstall,
    greenInstall,
    lawnTrash,
    lawnSoil,
    lawnFertilizer,
    lawnFull,
    lawnInstall,
    manufacturer,
    lengthLine,
    lengthNasos,
    fan;




function land(){
    sotka = Number(document.querySelector('#sotka').value);
    landProject = (document.querySelector('#land-project').checked) ? landProjectConst : 0;
    landFull = (document.querySelector('#land-full').checked) ? landFullConst : 0;
    wateringInstall = (document.querySelector('#watering-install').checked) ? wateringInstallConst : 0;
    fogInstall = (document.querySelector('#fog-install').checked) ? fogInstallConst : 0;
    greenInstall = (document.querySelector('#green-install').checked) ? greenInstallConst : 0;
    sum  = (landProject* sotka) + (landFull  * sotka) + (wateringInstall * sotka) + (fogInstall * sotka) + (greenInstall * sotka) ;
    document.querySelector('.calc__answer').textContent = sum;
}



function lawn(){
    sotka = Number(document.querySelector('#sotka').value);
    lawnFull = (document.querySelector('#lawn-full').checked) ? lawnFullConst : 0;
    lawnTrash = (document.querySelector('#lawn-trash').checked) ? lawnTrashConst : 0;
    lawnSoil = (document.querySelector('#lawn-soil').checked) ? lawnSoilConst : 0;
    lawnFertilizer = (document.querySelector('#lawn-fertilizer').checked) ? lawnFertilizerConst : 0;
    lawnInstall = (document.querySelector('#lawn-install').checked) ? lawnInstallConst : 0;
    sum  =  (lawnFull * sotka) +  (lawnTrash * sotka) + (lawnSoil  * sotka) + (lawnFertilizer * sotka) + (lawnInstall * sotka);
    document.querySelector('.calc__answer').textContent = sum;
}

if (btnLand) {
    btnLand.onclick = land;
} else if (btnLawn) {
    btnLawn.onclick = lawn;
} else if (btnFog) {
    btnFog.onclick = fog;
}


function fog(){
    manufacturer = (document.querySelector('#manufacturer').value);
    lengthLine = Number(document.querySelector('#lengthLine').value);
    lengthNasos = Number(document.querySelector('#lengthNasos').value);
    fan = (document.querySelector('#fan').checked) ? Math.floor(lengthLine/5)*(fanCost + forsunkaCost*5 + kolcoCost) : 0;
 //   lengthLine/5 - количество вентиляторов, по одному на каждые 5 метров
    let answer;
    if (manufacturer === 'Китай') {
        //цены из таблицы по китайским насосам "все включено"
        if (lengthLine > 6.5 && lengthLine < 9) {
           answer = 499;
        } else if (lengthLine > 15 && lengthLine < 21) {
           answer = 799;
        } else if (lengthLine > 20 && lengthLine < 28) {
           answer = 849;
        } else if (lengthLine > 27 && lengthLine < 39) {
           answer = 989;
        } else {
           answer = 989 + Math.floor((lengthLine-39)/0.7)*(forsunkaCost + 2*krepezhCost + melochiCost)+ magistralCost* Math.floor(lengthLine-39);
        }
    } else if (manufacturer === 'Италия') {
        answer= Math.floor(lengthLine/0.7)*(forsunkaCost + 2*krepezhCost) + nasosCost + (magistralCost + melochiCost)*lengthLine + trubaCost*lengthNasos;
    //формула: цена форсунок с двумя крепежами * количество форсунок, если они идут через каждые 0,7м + цена насоса + цена магистрали и доп. мелочей на каждый метр + цена трубы до насоса
    }
console.log(answer +  fan + 0.15*answer);
    document.querySelector('.calc__answer').textContent = answer + 0.15*answer;
    //0,15 - 15% наценки за работу
}

