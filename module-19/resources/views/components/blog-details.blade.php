<div class="section section-text">
    <div class="row">
        <div class="card card-plain card-blog text-center">
            <div class="card-body">
                <h3 class="card-title" id="title">We will breathe clean air and exercise</h3>
                <h5 id="content" class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is too high for the beams and angle of the ceiling I also wanted to point out that it’s
                    the first album to go number 1 off of streaming...
                </h5>

                <p class="author">
                    by
                    <a >
                        <b id="author">Mike Butcher</b>
                    </a> 
                </p>
            </div>
        </div>
    </div>
</div>

<script> 
    const SinglePost = async () => {
        let postId = window.location.pathname.split('/posts/')[1];
        let URL = `/SinglePost/${postId}`

        try {
            loading()
            let res = await axios.get(URL);
            
            document.getElementById('title').innerText = res.data['title']
            document.getElementById('content').innerText = res.data['content']
            loading(false)
        } catch (error) {
            loading(false)
            message('error', 'Some Think is wrong')
        }
    }
    SinglePost()

    const PostUser = async () => {
        let postId = window.location.pathname.split('/posts/')[1];
        let URL = `/PostUser/${postId}`

        try {
            loading()
            let res = await axios.get(URL); 
            
            document.getElementById('author').innerText = res.data['user']['name']
            loading(false)
        } catch (error) {
            loading(false)
            message('error', 'Some Think is wrong')
        }
    }
    PostUser()
</script>