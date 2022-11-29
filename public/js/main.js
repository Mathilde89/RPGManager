const buttonAdd=document.querySelector('.reset')



buttonAdd.addEventListener("click",function(){
 
    const numberMag= Math.floor (Math.random() * 14)
    const numberFor= Math.floor (Math.random() * 14)
    const numberAgi= Math.floor (Math.random() * 14)
    const numberInt= Math.floor (Math.random() * 14)
    const numberPv= Math.floor (Math.random() * (50-20)+20)

    const valueMag= document.querySelector('.magie')
    valueMag.setAttribute('value', numberMag)
//     valueMag.value= `${numberMag}`

 const valueFor=document.querySelector('.force')
        valueFor.value= `${numberFor}`

 const valueAgi=document.querySelector('.agilité')
        valueAgi.value= ` ${numberAgi}`

 const valueInt=document.querySelector('.intelligence')
        valueInt.value= `${numberInt}`

 const valuePV=document.querySelector('.pv')
 valuePV.value= `${numberPv}`


})

 const numberMag= Math.floor (Math.random() * 14)
 const numberFor= Math.floor (Math.random() * 14)
 const numberAgi= Math.floor (Math.random() * 14)
 const numberInt= Math.floor (Math.random() * 14)
 const numberPv= Math.floor (Math.random() * (50-20)+20) 


 const valueMag= document.querySelector('.magie')
       valueMag.setAttribute('value', numberMag)
//     valueMag.setAttribute= `${numberMag}`

 const valueFor=document.querySelector('.force')
        valueFor.value= ` ${numberFor}`

 const valueAgi=document.querySelector('.agilité')
        valueAgi.value= `${numberAgi}`

 const valueInt=document.querySelector('.intelligence')
        valueInt.value= ` ${numberInt}`

 const valuePV=document.querySelector('.pv')
 valuePV.value= ` ${numberPv}`

 
