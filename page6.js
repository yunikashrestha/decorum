
     let data=[' Beds','Nightstand Tables','Sofa','Table'];
     let image=[['bedroom.webp','bed2.jpg','bed4.webp'],                                         
                ['nig1.jpg','nig2.webp','nig3.jpeg'],
                ['sof1.jpeg','sof2.jpg','sof3.jpg'],
                ['table1.jpg','table2.jpeg','table3.webp']]
                
                let price=[['35000','50000','80000'],                                         
                ['4000','6000','5500'],
                ['65000','80000','100000'],
                ['20000','10000','30000']]
                let name=[['Wellington Panel Bed','Wooden Beds','Woodlands King Panelbed'],                                         
                ['Modern Walnut Nightstand',' Tray Top Wood Nightstand',' Pearl Wood Nightstand'],
                ['Royal Sofa','Traditional Fabric Seat Sofa','Modern Fabric Seat Sofa'],
                ['Modern Geometric Shaped Table','Double Round Table','Modern Tea Table']]
                
            
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
    document.querySelector(".page6").innerHTML=code;
