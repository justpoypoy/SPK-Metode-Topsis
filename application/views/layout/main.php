<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?php
            if (empty($title)) {
                echo "HALAMAN UTAMA";
            } else {
                echo strtoupper($title);
            }
            ?>
        </h1>
        <?php
        if ($this -> uri -> segment(1) != '') {
            echo '  <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">' . ucfirst($this -> uri -> segment(1) == $this -> uri -> segment(1) ? ucwords(str_replace('-',' ', $this -> uri -> segment(1))) : $this -> uri -> segment(1)) . '</li>
                    </ol>';
        } else {
            echo '  <ol class="breadcrumb">
                    <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                    </ol>';
        };
        ?>
    </section>
    <?php
    if ($isi) {
        $this -> load -> view($isi);
    }
    ?>
</div>