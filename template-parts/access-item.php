<section class="p-access l-access delay" id="map">
  <div class="p-access__inner inner">
    <div class="p-access__map-wrap">
      <h2 class="p-access__title main-title iconMap u-textMdCenter delay">拠点マップ</h2>

      <div class="p-access__content-img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about/map2.png" usemap="#ImageMap" alt="福岡県および佐賀県の施設一覧" />
        <map name="ImageMap">
          <area shape="circle" coords="147,1484,81" href="/imari" alt="" />
          <area shape="circle" coords="341,1175,93" href="/karatsu" alt="" />
          <area shape="circle" coords="945,1553,79" href="/kose/" alt="" />
          <area shape="circle" coords="645,699,68" href="/itoshima" alt="" />
          <area shape="circle" coords="823,486,74" href="/koga" alt="" />
          <area shape="circle" coords="1429,490,73" href="/honjo" alt="" />
          <area shape="circle" coords="1389,627,73" href="/honjo02/" alt="" />
          <area shape="circle" coords="1511,715,74" href="/einomaru" alt="" />
          <area shape="circle" coords="1972,393,67" href="/nakabaru" alt="" />
          <area shape="circle" coords="2348,582,86" href="/usamachi" alt="" />
          <area shape="circle" coords="2232,822,90" href="/wakazono" alt="" />
          <area shape="circle" coords="2608,767,76" href="/sone" alt="" />
          <area shape="circle" coords="2505,902,80" href="/sone02" alt="" />
          <area shape="circle" coords="2234,1034,88" href="/tokuyoshi/" alt="" />
          <area shape="circle" coords="2739,1170,92" href="/obase/" alt="" />
          <area shape="circle" coords="2569,1289,97" href="/obase02/" alt="" />
        </map>
      </div>
    </div>
  </div>
</section>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- jQuery RWD Image Maps -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-rwdImageMaps/1.6/jquery.rwdImageMaps.min.js"></script>

<script>
  jQuery('img[usemap]').rwdImageMaps();
</script>
