<x-app>
  <x-slot name="title">
    Home
  </x-slot>
  <div class="flex flex-col">
    <section class="max-w-6xl 2xl:max-w-7xl">
      <h1>Para começar, escolha uma fase.</h1>
      <img id="fluxo" max-height="100%" max-width="100%" src="{{ asset('storage/images/fluxo.svg') }}" usemap="#map-large">
      <map name="map-small">
        <area href="{{ url()->current().'/planning/p1-1'}}" coords="37.23931034482759,41.78068965517241,145.32413793103447,115.35103448275862" shape="rect">
        <area href="{{ url()->current().'/planning/p1-2'}}" coords="164.39793103448275,41.78068965517241,272.48275862068965,114.44275862068964" shape="rect">
        <area href="{{ url()->current().'/planning/p1-3'}}" coords="291.55655172413793,42.68896551724138,402.3662068965517,113.53448275862068" shape="rect">
        <area href="{{ url()->current().'/planning/p2-1'}}" coords="418.7151724137931,41.78068965517241,530.4331034482758,114.44275862068964" shape="rect">
        <area href="{{ url()->current().'/planning/p3-1'}}" coords="546.7820689655172,42.68896551724138,655.775172413793,116.25931034482758" shape="rect">
        <area href="{{ url()->current().'/planning/p3-2'}}" coords="545.8737931034483,132.60827586206895,654.8668965517242,204.36206896551724" shape="rect">
        <area href="{{ url()->current().'/planning/p3-3'}}" coords="415.99034482758617,133.51655172413794,526.8,205.2703448275862" shape="rect">
        <area href="{{ url()->current().'/planning/p4-1'}}" coords="292.46482758620687,133.51655172413794,400.5496551724138,204.36206896551724" shape="rect">
        <area href="{{ url()->current().'/planning/p6-1'}}" coords="166.21448275862068,132.60827586206895,276.1158620689655,207.99517241379309" shape="rect">
        <area href="{{ url()->current().'/planning/p6-2'}}" coords="36.33103448275862,132.60827586206895,144.4158620689655,206.17862068965516 shape="rect">
        <area href="{{ url()->current().'/execution/e6-1'}}" coords="709.3634482758621,86.28620689655172,818.356551724138,158.94827586206895" shape="rect">
        <area href="{{ url()->current().'/execution/e7-1'}}" coords="836.5220689655172,40.87241379310345,947.331724137931,115.35103448275862" shape="rect">
        <area href="{{ url()->current().'/execution/e2-1'}}" coords="837.4303448275862,133.51655172413794,946.423448275862,206.17862068965516" shape="rect">
        <area href="{{ url()->current().'/design/d2-1'}}" coords="36.33103448275862,267.0331034482759,145.32413793103447,342.42 shape="rect">
        <area href="{{ url()->current().'/design/d2-2'}}" coords="163.4896551724138,265.2165517241379,274.2993103448276,338.7868965517241" shape="rect">
        <area href="{{ url()->current().'/design/d3-1'}}" coords="292.46482758620687,269.75793103448274,400.5496551724138,337.8786206896552" shape="rect">
        <area href="{{ url()->current().'/design/d5-1'}}" coords="417.80689655172415,269.75793103448274,526.8,337.8786206896552" shape="rect">
        <area href="{{ url()->current().'/design/d5-2'}}" coords="547.6903448275862,270.6662068965517,655.775172413793,340.60344827586204" shape="rect">
        <area href="{{ url()->current().'/configuration/c3-1'}}" coords="709.3634482758621,267.9413793103448,818.356551724138,341.511724137931" shape="rect">
        <area href="{{ url()->current().'/configuration/c4-1'}}" coords="838.3386206896552,269.75793103448274,942.7903448275862,340.60344827586204" shape="rect">
        <area href="{{ url()->current().'/monitoring/m2-1'}}" coords="999.1034482758621,43.59724137931035,1108.096551724138,117.16758620689654" shape="rect">
        <area href="{{ url()->current().'/monitoring/m6-1'}}" coords="1001.828275862069,134.4248275862069,1106.28,205.2703448275862" shape="rect">
        <area href="{{ url()->current().'/monitoring/m7-1'}}" coords="1000.92,226.1606896551724,1109.913103448276,295.1896551724138" shape="rect">
        <area href="{{ url()->current().'/analysis/a1-1'}}" coords="1000.011724137931,404.18275862068964,1109.0048275862068,477.75310344827585" shape="rect">
        <area href="{{ url()->current().'/analysis/a5-1'}}" coords="874.6696551724137,406.90758620689655,979.1213793103448,477.75310344827585" shape="rect">
        <area href="{{ url()->current().'/analysis/a7-1'}}" coords="745.6944827586207,405.99931034482756,854.6875862068965,475.02827586206894" shape="rect">
        <area href="{{ url()->current().'/analysis/a7-2'}}" coords="617.6275862068966,408.7241379310345,725.7124137931035,476.84482758620686" shape="rect">
        <area href="{{ url()->current().'/reporting/r7-1'}}" coords="455.95448275862066,407.8158620689655,564.0393103448275,475.9365517241379" shape="rect">
        <area href="{{ url()->current().'/planning'}}" coords="18.16551724137931,15.440689655172413,673.9406896551724,223.43586206896552 shape="rect">
        <area href="{{ url()->current().'/design'}}" coords="18.16551724137931,243.41793103448276,673.0324137931034,359.6772413793103 shape="rect">
        <area href="{{ url()->current().'/configuration'}}" coords="689.3813793103448,241.6013793103448,963.6806896551724,361.49379310344824" shape="rect">
        <area href="{{ url()->current().'/execution'}}" coords="689.3813793103448,12.715862068965517,964.5889655172414,223.43586206896552" shape="rect">
        <area href="{{ url()->current().'/monitoring'}}" coords="982.7544827586206,15.440689655172413,1129.895172413793,316.08" shape="rect">
        <area href="{{ url()->current().'/analysis'}}" coords="1126.2620689655173,374.20965517241376,600.3703448275862,494.1020689655172" shape="rect">
        <area href="{{ url()->current().'/reporting'}}" coords="580.3882758620689,377.84275862068966,435.97241379310344,494.1020689655172" shape="rect">
      </map>
      <map name="map-large">
        <area href="{{ url()->current().'/planning/p1-1'}}" coords="41,46,160,127" shape="rect">
        <area href="{{ url()->current().'/planning/p1-2'}}" coords="181,46,300,126" shape="rect">
        <area href="{{ url()->current().'/planning/p1-3'}}" coords="321,47,443,125" shape="rect">
        <area href="{{ url()->current().'/planning/p2-1'}}" coords="461,46,584,126" shape="rect">
        <area href="{{ url()->current().'/planning/p3-1'}}" coords="602,47,722,128" shape="rect">
        <area href="{{ url()->current().'/planning/p3-2'}}" coords="601,146,721,225" shape="rect">
        <area href="{{ url()->current().'/planning/p3-3'}}" coords="458,147,580,226" shape="rect">
        <area href="{{ url()->current().'/planning/p4-1'}}" coords="322,147,441,225" shape="rect">
        <area href="{{ url()->current().'/planning/p6-1'}}" coords="183,146,304,229" shape="rect">
        <area href="{{ url()->current().'/planning/p6-2'}}" coords="40,146,159,227" shape="rect">
        <area href="{{ url()->current().'/execution/e6-1'}}" coords="781,95,901,175" shape="rect">
        <area href="{{ url()->current().'/execution/e7-1'}}" coords="921,45,1043,127" shape="rect">
        <area href="{{ url()->current().'/execution/e2-1'}}" coords="922,147,1042,227" shape="rect">
        <area href="{{ url()->current().'/design/d2-1'}}" coords="40,294,160,377" shape="rect">
        <area href="{{ url()->current().'/design/d2-2'}}" coords="180,292,302,373" shape="rect">
        <area href="{{ url()->current().'/design/d3-1'}}" coords="322,297,441,372" shape="rect">
        <area href="{{ url()->current().'/design/d5-1'}}" coords="460,297,580,372" shape="rect">
        <area href="{{ url()->current().'/design/d5-2'}}" coords="603,298,722,375" shape="rect">
        <area href="{{ url()->current().'/configuration/c3-1'}}" coords="781,295,901,376" shape="rect">
        <area href="{{ url()->current().'/configuration/c4-1'}}" coords="923,297,1038,375" shape="rect">
        <area href="{{ url()->current().'/monitoring/m2-1'}}" coords="1100,48,1220,129" shape="rect">
        <area href="{{ url()->current().'/monitoring/m6-1'}}" coords="1103,148,1218,226" shape="rect">
        <area href="{{ url()->current().'/monitoring/m7-1'}}" coords="1102,249,1222,325" shape="rect">
        <area href="{{ url()->current().'/analysis/a1-1'}}" coords="1101,445,1221,526" shape="rect">
        <area href="{{ url()->current().'/analysis/a5-1'}}" coords="963,448,1078,526" shape="rect">
        <area href="{{ url()->current().'/analysis/a7-1'}}" coords="821,447,941,523" shape="rect">
        <area href="{{ url()->current().'/analysis/a7-2'}}" coords="680,450,799,525" shape="rect">
        <area href="{{ url()->current().'/reporting/r7-1'}}" coords="502,449,621,524" shape="rect">
        <area href="{{ url()->current().'/planning'}}" coords="20,17,742,246" shape="rect">
        <area href="{{ url()->current().'/design'}}" coords="20,268,741,396" shape="rect">
        <area href="{{ url()->current().'/configuration'}}" coords="759,266,1061,398" shape="rect">
        <area href="{{ url()->current().'/execution'}}" coords="759,14,1062,246" shape="rect">
        <area href="{{ url()->current().'/monitoring'}}" coords="1082,17,1244,348" shape="rect">
        <area href="{{ url()->current().'/analysis'}}" coords="1240,412,661,544" shape="rect">
        <area href="{{ url()->current().'/reporting'}}" coords="639,416,480,544" shape="rect">
      </map>
    </section>
  </div>
  <script>
    $(function() {
      const img = $("#fluxo")
      function adjust() {
        // 1536 = 2xl
        $(window).width() > 1536 ? img.attr('usemap', '#map-large') : img.attr('usemap', '#map-small')
      }
      $(window).resize(function () {adjust()})
      adjust()
    })
  </script>
</x-app>
