(async () => {
    await new Promise((resolve) => window.addEventListener("load", resolve));

    let makeProductListing = (product) => {
        //Create the elements of the product listing
        let column = document.createElement("div");
        let card = document.createElement("div");
        let cardImage = document.createElement("img");
        let cardBody = document.createElement("div");
        let cardTitle = document.createElement("h5");
        let stockLabel = document.createElement("span");

        //Set the classes of the elements
        column.classList.add("col-md-4");
        card.classList.add("card", "h100");
        cardImage.classList.add("card-img-top");
        cardBody.classList.add("card-body");
        cardTitle.classList.add("card-title", "d-flex", "justify-content-between");
        stockLabel.classList.add("badge");

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
            }else {
                stockLabel.classList.add("bg-success");
                stockLabel.innerText = "In Stock";
            }
        }else {
            stockLabel.classList.add("bg-danger");
            stockLabel.innerText = "Out of Stock";
        }
        
        return column;
    }

    //Get the list of products
    let products = await (await fetch("products.json")).json();

    let woodSpecies = document.getElementById("wood-species");
    let otherProducts = document.getElementById("other-products");

    //Generate the list of wood species
    for(let product of products.species) {
        woodSpecies.appendChild(makeProductListing(product));
    }

    //Generate the list of other products
    for(let product of products.other) {
        otherProducts.appendChild(makeProductListing(product));
    }
})();