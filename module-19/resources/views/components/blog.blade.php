<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <h2 class="title">All Articles</h2>

                <div id="blog-list"></div>

                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center" id="pagination">

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<script>
    //excerpt
    const excerpt = (text) => {
        return text.substring(0, 300);
    }

    const allBlog = async () => {
        let URL = '/PostList'

        try {
            loading()
            let res = await axios.get(URL);
            res.data.data.forEach((item) => {
                let shortContent = '';
                shortContent = excerpt(item['content']);

                document.getElementById('blog-list').innerHTML += (
                    `<div class="card card-plain card-blog">
                            <div class="card-body">
                                    <h3 class="card-title"> 
                                            <a href="posts/${item['id']}">${item['title']}</a>
                                        </h3>
                            <h5 class="card-description">
                                ${shortContent}
                            </h5>
                            <a href="posts/${item['id']}" class="btn btn-success btn-sm"> Read More</a>
                        </div>
                    </div>`
                );
            });

            loading(false)
        } catch (error) {
            loading(false)
            message('error', 'Some Think is wrong')
        }
    }
    allBlog()
</script>
