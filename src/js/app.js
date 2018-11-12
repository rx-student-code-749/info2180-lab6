const results = $("#results");
const q = $("#q");
const uri = document.getElementById('q').closest('form').getAttribute('action');

function fn (e) {
    e.preventDefault();
    let query = q.val();
    results.empty();
    if (query != null)
        results.load(uri + '?q=' + query);
    // else
    //     $(results).a
}

function fn2 (e) {
    e.preventDefault();

    $.ajax({
        url: uri + "?all=true"
    }).done(function (data) {
        data = data.childNodes[0].childNodes;

        let listContainer = $("<div />");
        let listEl = $("<ol />");


        for (i = 0; i < data.length ;i++) {
            let keyword = data[i].nodeName;
            let description = data[i].childNodes[0].nodeValue;
            let author = data[i].getAttributeNode('author').nodeValue;

            let liEl = $("<li />");
            let divEl = $("<div />");
            let keywordEl = $("<h3 />");
            let descriptionEl = $("<p />");
            let authorEl = $("<p />");

            keywordEl.text(keyword);
            descriptionEl.text(description);
            authorEl.text(author);

            liEl.addClass('list-item');
            keywordEl.addClass('list-item-keyword');
            descriptionEl.addClass('list-item-description');
            authorEl.addClass('list-item-author');

            divEl.append(keywordEl);
            divEl.append(authorEl);
            divEl.append(descriptionEl);
            liEl.append(divEl);
            listEl.append(liEl);
        }

        listContainer.append(listEl);

        results.empty();
        results.append(listContainer);
        // results.innerHTML = listContainer.innerHTML;

        console.log(results);
    });
}
