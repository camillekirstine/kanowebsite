export default class KanoStaff {
    constructor() {
        this.data = {
            password: 'kanohair'
        }

        this.rootElem = document.querySelector('.staff');
    }

    async init() {
      await this.render();
    }

    async render() {
      const data = await this.getData();
      console.log(data);

      const row = document.createElement('div');
       row.classList.add('row', 'mx-lg-5', 'px-lg-5', 'justify-content-center');

       row.innerHTML = `
       
       `;

       for(const item of data){
           const col = document.createElement('div');
           col.classList.add('col-6','col-lg-4');


           col.innerHTML = `
            

             <div class="position-relative">
                <img class="mb-4 mb-lg-0 mt-lg-4" alt="picture of a staffmember" src="uploads/${item.staffPicOverlay}">

                <div class="textElementCard text-center z-2">
                    <h2 class="mb-0">${item.staffName}</h2>
                   <a href="#myModal={${item.staffId}}&referrer=website" data-bs-toggle="modal">Read more</a> 
                </div>
             </div>
             
             <div class="modal modal-lg" id="myModal={${item.staffId}}&referrer=website" aria-labelledby="myModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content bg-navyBlue">
                            <div class="row">
                                <div class="col d-flex justify-content-end mt-2 me-3">
                                     <i data-bs-dismiss="modal" class=" fs-2 text-lightYellow fa-solid fa-xmark"></i>
                                </div>
                            </div>

                            <div class="row mx-1 mx-lg-0 ms-lg-2">
                                <div class="col-12 col-lg-6 pt-3 pb-lg-5">
                                 <img src="uploads/${item.staffPicFramed}">
                                </div>
                                <div class="modalText col-12 col-lg-6 py-2 pb-5 pb-lg-0 pt-lg-5">
                                    <h3 class="text-lightYellow">${item.staffName}</h3>
                                    <p>${item.staffDescription}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
                
            
           `;


           row.appendChild(col);

       }
       this.rootElem.innerHTML = '';
       this.rootElem.appendChild(row);


    }

    async getData(){
        const response = await fetch('api.php', {
            method: 'POST',
            body: JSON.stringify(this.data)
        });
        return await response.json();
    }


}