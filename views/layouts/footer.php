
<!-- Sprite -->
<svg style="display: none;">

    <symbol id="facebook" viewBox="0 0 24 24">
        <g>
            <path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/>
        </g>
    </symbol>

    <symbol id="twitter" viewBox="0 0 512 512">
        <g>
            <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                C480.224,136.96,497.728,118.496,512,97.248z"/>
        </g>
    </symbol>

    <symbol id="linkedin" viewBox="0 0 510 510">
        <g>
            <path d="M459,0H51C22.95,0,0,22.95,0,51v408c0,28.05,22.95,51,51,51h408c28.05,0,51-22.95,51-51V51C510,22.95,487.05,0,459,0z
			 M153,433.5H76.5V204H153V433.5z M114.75,160.65c-25.5,0-45.9-20.4-45.9-45.9s20.4-45.9,45.9-45.9s45.9,20.4,45.9,45.9
			S140.25,160.65,114.75,160.65z M433.5,433.5H357V298.35c0-20.399-17.85-38.25-38.25-38.25s-38.25,17.851-38.25,38.25V433.5H204
			V204h76.5v30.6c12.75-20.4,40.8-35.7,63.75-35.7c48.45,0,89.25,40.8,89.25,89.25V433.5z"/>
        </g>
    </symbol>

</svg>


<footer class="footer">
    <div class="container">
        <div class="footer__inner">

            <div class="footer__block">
                <div class="footer__title">Наш склад</div>
                <address class="footer__address">
                    <div>3481 Melrose Place</div>
                    <div>Powey, CA 90210</div>
                </address>
            </div>

            <div class="footer__block">
                <div class="footer__title">Мы в соц.сетях</div>
                <div class="social social--footer">
                    <a class ="social__item" href="" target="_blank">
                        <svg class="social__icon">
                            <use xlink:href="#facebook"></use>
                        </svg>
                    </a>

                    <a class ="social__item" href="" target="_blank">
                        <svg class="social__icon">
                            <use xlink:href="#twitter"></use>
                        </svg>
                    </a>

                    <a class ="social__item" href="" target="_blank">
                        <svg class="social__icon">
                            <use xlink:href="#linkedin"></use>
                        </svg>
                    </a>
                </div>
            </div>

            <div class="footer__block">
                <div class="footer__title">О сайте</div>
                <div class="footer__text">
                    <p> Наш сайт стремится глубже проникнуться музыкой, и мы верим в силу альбома как формы искусства.</p>
                </div>
            </div>

        </div>      <!-- /.footer__inner -->
    </div>        <!-- /.container -->

</footer>
<script src="/template/js/app.js"></script>
<script>
    $(document).ready(function () {

        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count, #cart-count2").html(data);
            });
            return false;
        });

        function load_data(query)
        {
            $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{query:query},
                success:function(data)
                {
                    $('#result').html(data);
                }
            });
        }
        $('#searchControl').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
                load_data(search);
            }
        });
    });
</script>
</body>
</html>