const buttonAdd=document.querySelector('.reset')



buttonAdd.addEventListener("click",function(){
 
    const numberMag= Math.floor (Math.random() * 14)
    const numberFor= Math.floor (Math.random() * 14)
    const numberAgi= Math.floor (Math.random() * 14)
    const numberInt= Math.floor (Math.random() * 14)
    const numberPv= Math.floor (Math.random() * (50-20)+20)

    const valueMag= document.querySelector('.magie')
    valueMag.innerText= `magie:  ${numberMag}`

 const valueFor=document.querySelector('.force')
        valueFor.innerText= `force:  ${numberFor}`

 const valueAgi=document.querySelector('.agilité')
        valueAgi.innerText= `agilité:  ${numberAgi}`

 const valueInt=document.querySelector('.intelligence')
        valueInt.innerText= `intelligence:  ${numberInt}`

 const valuePV=document.querySelector('.pv')
 valuePV.innerText= `pv:  ${numberPv}`


})

 const numberMag= Math.floor (Math.random() * 14)
 const numberFor= Math.floor (Math.random() * 14)
 const numberAgi= Math.floor (Math.random() * 14)
 const numberInt= Math.floor (Math.random() * 14)
 const numberPv= Math.floor (Math.random() * (50-20)+20) 


 const valueMag= document.querySelector('.magie')
    valueMag.innerText= `magie:  ${numberMag}`

 const valueFor=document.querySelector('.force')
        valueFor.innerText= `force:  ${numberFor}`

 const valueAgi=document.querySelector('.agilité')
        valueAgi.innerText= `agilité:  ${numberAgi}`

 const valueInt=document.querySelector('.intelligence')
        valueInt.innerText= `intelligence:  ${numberInt}`

 const valuePV=document.querySelector('.pv')
 valuePV.innerText= `pv:  ${numberPv}`

 
