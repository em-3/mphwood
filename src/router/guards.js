const titleGuard = async (to, from) => {
    let titleMetaTag = document.getElementById("titleMeta")

    if(!to.meta.documentTitle) {
        document.title = "Miller Pacific Hardwoods"
        titleMetaTag.setAttribute("content", "Miller Pacific Hardwoods")
        return
    }

    document.title = to.meta.documentTitle + " - Miller Pacific Hardwoods"
    titleMetaTag.setAttribute("content", to.meta.documentTitle + " - Miller Pacific Hardwoods")
}

const metaGuard = async (to, from) => {
    //Remove previous tags
    let previousTags = document.head.querySelectorAll("[data-vue-router-meta-tag]")
    previousTags.forEach((tag) => tag.remove())

    if(!to.meta.metaTags) {
    return
    }

    //Add each tag
    to.meta.metaTags.forEach((tag) => {
        let metaElement = document.createElement("meta")

        metaElement.dataset.vueRouterMetaTag = ""

        Object.keys(tag).forEach((attributeName) => metaElement.setAttribute(attributeName, tag[attributeName]))

        document.head.appendChild(metaElement)
    })
}

export {
    titleGuard, metaGuard
}