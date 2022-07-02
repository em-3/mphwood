function makeProductListing(product) {
    //Create the elements of the product listing
    let column = document.createElement("div");
    let card = document.createElement("div");
    let cardImage = document.createElement("img");
    let cardBody = document.createElement("div");
    let cardTitle = document.createElement("h5");
    let stockLabel = document.createElement("span");

    //Set the classes of the elements
    column.classList.add("col-lg-3", "col-md-4", "col-sm-6");
    card.classList.add("card", "h-100");
    cardImage.classList.add("card-img-top");
    cardBody.classList.add("card-body");
    cardTitle.classList.add("card-title", "d-flex", "justify-content-between", "gap-3");
    stockLabel.classList.add("badge", "h-100");

    cardImage.src = "imgs/" + product.image;
    cardTitle.innerText = product.name;

    //Assemble the product listing
    column.appendChild(card);
    card.appendChild(cardImage);
    card.appendChild(cardBody);
    cardBody.appendChild(cardTitle);
    cardTitle.appendChild(stockLabel);

    //If the product has a description, add it to the card body
    if(product.description) {
        let cardText = document.createElement("p");
        cardText.classList.add("card-text");
        cardText.innerText = product.description;
        cardBody.appendChild(cardText);
    }

    //Determine the stock label
    if(product.inStock) {
        if(product.qty > 0) {
            stockLabel.classList.add("bg-success");
            stockLabel.innerText = product.qty + " in Stock";
        }else if(product.requestOnly) {
            stockLabel.classList.add("bg-warning");
            stockLabel.innerText = "Request Only";
        }else if(product.limitedStock) {
            stockLabel.classList.add("bg-warning");
            stockLabel.innerText = "Limited Stock";
        }else {
            stockLabel.classList.add("bg-success");
            stockLabel.innerText = "In Stock";
        }
    }else {
        stockLabel.classList.add("bg-danger");
        stockLabel.innerText = "Out of Stock";
    }

    cardImage.addEventListener("error", () => column.remove());
    
    return column;
}

async function getProductsList() {
    return fetch("products.json").then(response => {
        if(response.ok) {
            return response.json();
        }
        
        return Promise.reject(response.statusText);
    }, error => {
        return Promise.reject(error);
    }).then(data => {
        return data;
    }, error => {
        return Promise.resolve({
            error: {
                message: "Could not load products",
                obj: error
            }
        });
    });
}

function generateErrorMessage() {
    let error = document.createElement("div");
    let errorText = document.createElement("p");
    errorText.innerText = "Oh no! Something went wrong on our end and we couldn't load the products list. Please try again later.";
    error.classList.add("col-md-4", "text-center");
    error.appendChild(errorText);

    return error;
}