<div class="section section-comments">
    <div class="row">
        <div class="col-md-8 ml-auto mr-auto">
            <div id="all-comment" class="media-area text-center">
                <h3 class="title text-center">All Comments</h3>
            </div>

            <h3 class="title text-center">Post your comment</h3>
            <div class="media media-post">
                <a class="author float-left" href="#pablo">
                    <div class="avatar"> 
                        <img src="https://e7.pngegg.com/pngimages/304/305/png-clipart-man-with-formal-suit-illustration-web-development-computer-icons-avatar-business-user-profile-child-face.png" alt="" srcset="">
                    </div>
                </a>
                <div class="media-body">
                    <form id="contactForm" class="form-group label-floating bmd-form-group">
                        <label class="form-control-label bmd-label-floating" for="exampleBlogPost"> Write some nice stuff or nothing...</label>
                        <textarea class="form-control" rows="5" id="exampleBlogPost"></textarea>
                        <div class="media-footer">
                            <button id="submitButton" type="button"  class="btn btn-success btn-sm float-right">Post Comment</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end media-post -->
        </div>
    </div>
</div>
<script>
    const PostShowComment = async () => {
        let postId = window.location.pathname.split('/posts/')[1];
        let URL = `/PostShowComment/${postId}`

        try {
            loading()
            let res = await axios.get(URL);

            res.data[0]['comments'].forEach((item) => {
                    document.getElementById('all-comment').innerHTML += (
                    `<div class="media">
                        <a class="float-left" href="#pablo">
                            <div class="avatar">
                                <img src="https://media.istockphoto.com/id/1327592449/vector/default-avatar-photo-placeholder-icon-grey-profile-picture-business-man.jpg?s=612x612&w=0&k=20&c=yqoos7g9jmufJhfkbQsk-mdhKEsih6Di4WZ66t_ib7I="/>
                            </div>
                        </a>
                        
                        <div class="media-body">
                            <h4 class="media-heading">Unknown person</h4>
                            <h6 class="text-muted"></h6>
                            <p>${item['content']}</p>
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
    PostShowComment()
    
    const commentSubmitButton = document.getElementById('submitButton');
    commentSubmitButton.addEventListener('click', async (e) => {
        let content = document.getElementById('exampleBlogPost').value 
        let post_id = window.location.pathname.split('/posts/')[1]
        
        let url = `/PostCreateComment/${post_id}`;
        let formData = {
            "post_id": post_id,
            "content": content,
        }
        console.log(formData)
        try { 
            loading()
            let res = await axios.post(url, formData)
            
            if(res.data===1) {
                document.getElementById('exampleBlogPost').value = ''
                loading(false)
                PostShowComment()
                message('success', 'comment success')
            }
        } catch (error) {
            loading(false)
            message('error', 'Some Think is worng')
        } 
    })
</script>