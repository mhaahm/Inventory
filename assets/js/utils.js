
async function getPage(url,formData,method = 'POST') {
    if(method == 'POST')
    {
        let res = await fetch(window.urlPage+url, {
            method: "POST",
            body: formData,
            headers: {
                "Content-Type": "application/json"
            }
        });
        let text = await res.text()
        return text
    } else {
        import queryString from 'query-string'
        fetch(`/some/url/path/?${queryString.stringify(params)}`)
    }

}

module.exports = {
    getPage
}
