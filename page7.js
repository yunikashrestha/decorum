

let data=[' Ceiling Lights','Lamps','Wall Lighting','Chandelier'];
let image=[['light.webp','ligh1.jpg','light2.webp'],                                         
           ['lamp1.webp','lamp2.webp','lamp3.webp'],
           ['walllight1.webp','walllight2.webp','walllight3.webp'],
           ['c1.png','c2.jpg','c3.webp']]
           
           let price=[['3500','14000','8000'],                                         
           ['4000','6000','5500'],
           ['6500','8000','10000'],
           ['200000','100000','300000']]
           let name=[['Arame Small Flush Ceiling Light','Crystal Ceiling Lights LED Light Fixtures','Modern Ceiling Lights LED '],                                         
           ['Trophy Industrial Table Lamp Antique ',' Tucker Striped Ceramic and Metal LED Table Lamp',' Contemporary Table Lamp, Taupe Hardback '],
           ['Retro-inspired Adjustable Wall Sconce - Glenn','Light Wall Mount, Satin Nickel',' Matte Black and Harvest Brass'],
           ['Crystal Chandelier Light Fixture ','Flois Crystal Dimmable LED Empire Chandelier','Nordic LED Crystal Chandelier Lighting']]
           
       
let code="";
for(let i=0;i<4;i++)
{
   code+=`<div style="display:flex;justify-content: center; padding:30px 70px 30px 20px;font-size: 30px;font-weight: 400;">
      ${data[i]}
       </div>
          <div style="display: grid;grid-template-columns: 1fr 1fr 1fr ;">
       `
       for(let j=0;j<3;j++)
       {
           code+=`<div>

           <div style="position:relative;">
               <div
                   style="color:white;border: 1px  solid black;background-color: green;width:60px;margin-left: 80px;position: absolute;">
                   SALE</div>
               <img src="images/${image[i][j]}" height="200px" width="270px" style="margin-left:80px;">
           </div>
           <div style="padding-left:80px;">${name[i][j]}<br>
             <br>
               NPR-${price[i][j]}<br>
           </div>
       
   </div>`


       }
       code+='</div>'

}
document.querySelector(".page7").innerHTML=code;
