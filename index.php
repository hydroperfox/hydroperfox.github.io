<?php require_once "_prelude.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <?php include "_components/html/layout.php"; ?>
    <title>Hydroper</title>
</head>
<body>
    <?php include "_components/html/header.php"; ?>
    <main>
        <div style="display: flex; justify-content: center; align-items: center">
            <div class="page-horizontal-limit">
                <!-- Whack -->
                <img src="/assets/images/whacklogo.png" alt="Whack" style="width: 100%; max-width: 700px">
                <div style="margin: 0.5rem 0rem; text-align: center">
                    <a href="/whack" alt="Whack"><button class="Button">Discover Whack™</button></a>
                </div>

                <!-- AS3Parser -->
                <h1>AS3Parser</h1>
                <p>
                    AS3Parser parses full ActionScript 3, MXML and CSS,
                    yielding full ASDoc structures and source locations.
                    It is implemented in the Rust language.
                </p>
                <div style="margin: 0.5rem 0rem; text-align: center">
                    <a target="_new" href="https://github.com/mxmlextrema/as3parser" alt="AS3Parser repository"><button class="Button">AS3Parser repository</button></a>
                </div>

                <!-- SModel -->
                <h1>SModel</h1>
                <p>
                    SModel for the Rust language allows to define hierarchical structures
                    used in semantic data models.
                </p>
                <div style="margin: 0.5rem 0rem; text-align: center">
                    <a target="_new" href="https://github.com/hydroperfox/rustsmodel" alt="SModel repository"><button class="Button">SModel repository</button></a>
                </div>

                <!-- DeviantArt -->
                <h1>Digital arts</h1>
                <p>
                    Hydroper was an active artist in year 2014.
                </p>
                <div style="margin: 0.5rem 0rem; text-align: center">
                    <a target="_new" href="https://deviantart.com/hydroper" alt="DeviantArt profile"><button class="Button">DeviantArt profile</button></a>
                </div>
            </div>
        </div>
    </main>
    <?php include "_components/html/footer.php"; ?>
</body>
</html>