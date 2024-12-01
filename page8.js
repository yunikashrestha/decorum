

let data=[' Mirrors','Curtains','Outdoor Chairs','Rugs'];
let image=[['m5.jpg','m3.jpeg','m4.webp'],                                         
           ['cu1.webp','cu2.webp','cuu.webp'],
           ['oc.jpeg','oc11.jpg','oc2.jpg'],
           ['rug1.webp','rug2.webp','rug3.webp']]
           
           let price=[['3500','4000','3000'],                                         
           ['40000','60000','55000'],
           ['6500','8000','10000'],
           ['60000','55000','50000']]
           let name=[['Peruvian Wall Mirror','Edge Mirror','Hope Mirror '],                                         
           ['Heritage Plush Velvet Curtain Single Panel',' Signature Double Wide Curtain','Luxury Velvet Curtains '],
           ['Plastic Rattan Chair',' Outdoor Garden Tea Chair Set',' Wooden Armchairs And Lounge Chair'],
           ['Nuloom Vintage Fringe Rug ','Safavieh Madison MAD600 Rug','Olive Charcoal Layla Printed Area']]
           
       
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
document.querySelector(".page8").innerHTML=code;
