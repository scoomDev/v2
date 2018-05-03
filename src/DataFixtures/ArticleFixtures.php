<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $article1 = new Article();
        $article1->setTitle('Je vous souhaite la bienvenue !');
        $article1->setContent('<p style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Toujours dans le but de partager ma passion pour le 
        jeux vid&eacute;o, j&rsquo;ai d&eacute;cid&eacute; d&rsquo;ouvrir ce site que l&rsquo;on m&rsquo;a propos&eacute; de me d&eacute;velopper.<br /></span>Ici 
        vous trouverez des articles principalement sur le jeux vid&eacute;o, mais d&rsquo;autres th&egrave;mes peuvent &eacute;galement &ecirc;tre abord&eacute;s 
        de mani&egrave;re ponctuelle. Avis, news, tests (m&ecirc;me si je n&rsquo;aime pas trop le terme) et autres dossiers seront au rendez-vous.<br /><br />
        <span style="font-weight: 400;">Je ne sais pas encore &agrave; quelle fr&eacute;quence je publierais car la r&eacute;daction prend du temps, d&rsquo;autant 
        plus que je d&eacute;bute encore dans le domaine. Mais j\'essaierai d&rsquo;en ajouter le plus r&eacute;guli&egrave;rement possible, en fonction de mon emploi 
        du temps mais aussi de l&rsquo;actualit&eacute;.<br /></span><span style="font-weight: 400;">Niveau r&eacute;daction je n&rsquo;ai aucune formation dans le 
        domaine, pardonnez donc mon manque d&rsquo;exp&eacute;rience si vous le ressentez. Mais c&rsquo;est en forgeant que l&rsquo;on devient forgeron ! 
        N&rsquo;h&eacute;sitez pas &agrave; me faire vos retours, je ferais mon maximum pour m&rsquo;am&eacute;liorer et vous pr&eacute;senter des articles de 
        qualit&eacute; croissante.<br /><br /></span><span style="font-weight: 400;">Un syst&egrave;me de tags a &eacute;t&eacute; mis en place. En effet, chaque 
        article a des tags qui permettent de les identifier. Gr&acirc;ce &agrave; cela, lorsque vous cliquez sur un tag cela vous affiche la liste de tous les 
        articles le contenant !<br /><br /></span><span style="font-weight: 400;">Vous pouvez &eacute;galement ajouter des commentaires sur chaque post. 
        N&rsquo;h&eacute;sitez donc pas &agrave; partager votre avis sur le sujet ou autres remarques. Je vous demande juste de <span style="text-decoration: 
        underline;"><strong>rester respectueux et courtois</strong></span>, je me r&eacute;serve le droit de masquer les commentaires jug&eacute; 
        insultant ou comportant tout autres sujets qui n&rsquo;ont rien &agrave; faire ici (menace, racisme, etc&hellip;).<br /></span><span style="font-weight: 
        400;">Vous avez aussi la possibilit&eacute; de signaler un commentaire, il pourra alors &ecirc;tre examin&eacute; pour &ecirc;tre masqu&eacute; ou non.
        <br /></span><span style="font-weight: 400;"><span style="text-decoration: underline;"><strong>Les publicit&eacute;s sont &eacute;galement interdites.
        </strong></span><br /><br /></span><span style="font-weight: 400;">Parmi les pages disponibles en en-t&ecirc;te, une page &ldquo;Contact&rdquo; 
        qui vous permet de m&rsquo;envoyer un mail directement. La page &ldquo;A propos&rdquo; sera quant &agrave; elle aliment&eacute;e un peu plus tard.
        <br /><br /></span><span style="font-weight: 400;">Sur ce bonne lecture !</span></p>');
        $article1->setAuthor('Zhato');
        $article1->setCreatedAt(new \DateTimeImmutable());
        $article1->setUpdatedAt(new \DateTimeImmutable());
        $article1->setImage('test.jpg');
        $article1->setSlug('je-vous-souhaite-la-bienvenue');
        $article1->setIsPublished(true);

        $article2 = new Article();
        $article2->setTitle('Metroid Samus Returns : Retour de l’être aimé ?');
        $article2->setContent('<div style="text-align: justify; text-indent: 20px;"><strong>25 ans apr&egrave;s la sortie du jeu original, Nintendo nous propose de revivre l&rsquo;aventure de Metroid II : Return of Samus &agrave; travers ce remake sorti le 15 septembre 2017 sur 3DS et d&eacute;velopp&eacute; par MercurySteam. Un grand retour pour l\'h&eacute;ro&iuml;ne Samus Aran qui, depuis Metroid : Other M en 2010, ne figurait qu&rsquo;en guise de guest-star dans d&rsquo;autres jeux de la firme au plombier comme Smash Bros.</strong></div>
        <div style="text-align: justify;"><strong>Je dois bien avouer qu&rsquo;&agrave; l&rsquo;annonce de ce remake j&rsquo;ai &eacute;t&eacute; assez sceptique. MercurySteam devait populariser sans doute l&rsquo;&eacute;pisode le moins connu de la s&eacute;rie. Remettre au go&ucirc;t du jour un jeu riche et ambitieux mais limit&eacute; par les capacit&eacute;s techniques de la Game Boy s&rsquo;av&egrave;re &ecirc;tre une lourde t&acirc;che pour le studio espagnol. D&rsquo;autant plus qu&rsquo;il n&rsquo;avait pas une grande exp&eacute;rience en mati&egrave;re d&rsquo;action-plateforme 2D. En effet leur seul jeu du style &eacute;tait <em>Castlevania: Lords of Shadow - Mirror of Fate</em> sur 3DS, jeu dont les avis sont assez partag&eacute;s. Nintendo a-t-il mis&eacute; sur le bon poulain pour ce remake ?</strong></div>
        <div style="text-align: justify;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Nous incarnons donc Samus Aran, chasseuse de primes, sortie victorieuse de sa mission sur la plan&egrave;te Z&egrave;bes, stoppant ainsi la menace des Pirates de l&rsquo;espace voulant mener une guerre bact&eacute;riologique gr&acirc;ce &agrave; une esp&egrave;ce extraterrestre appel&eacute;e Metroid issu de la plan&egrave;te SR388. Suite &agrave; cela, la f&eacute;d&eacute;ration galactique d&eacute;cide d&rsquo;envoyer une sonde sur ladite plan&egrave;te afin de s&rsquo;assurer qu&rsquo;aucun d&rsquo;entre eux ne soit encore vivant. H&eacute;las, peu de temps apr&egrave;s son envoi, la f&eacute;d&eacute;ration perd toutes traces de la sonde, ainsi que celle de l&rsquo;&eacute;quipe envoy&eacute;e apr&egrave;s cette disparition. Ce n&rsquo;est qu&rsquo;apr&egrave;s avoir missionn&eacute; un groupe de forces sp&eacute;ciales qu&rsquo;elle parvient &agrave; obtenir quelques donn&eacute;es sur la plan&egrave;te avant de dispara&icirc;tre &eacute;galement, indiquant donc que les Metroid sont toujours en vie. C&rsquo;est alors qu&rsquo;ils vont engager Samus afin d&rsquo;&eacute;radiquer l&rsquo;esp&egrave;ce une bonne fois pour toutes.</span></div>
        <div style="text-align: justify; text-indent: 20px;">&nbsp;</div>
        <div style="text-align: center;"><img class="materialboxed" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" src="https://image.noelshack.com/fichiers/2017/46/5/1510876740-opening-1.jpg" alt="intro Metroid Samus Returns - Zhato.fr" /></div>
        <div style="text-align: justify; text-indent: 20px;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Le premier constat que l&rsquo;on peut faire est que MercurySteam a fait un travail de tr&egrave;s bonne qualit&eacute; du point de vue artistique. Les d&eacute;cors sont assez jolis et fourmillent de d&eacute;tails. La musique quant &agrave; elle est assez discr&egrave;te la plupart du temps, mais cela apporte un gros plus &agrave; l&rsquo;ambiance du jeu. Son absence accentue cette tension &agrave; explorer seul une plan&egrave;te inconnue regorgeant de cr&eacute;atures mortelles, tandis que des morceaux bien plus p&ecirc;chus et remarquables viendront agr&eacute;menter nos face-&agrave;-face avec les boss du jeu. Un gros travail a &eacute;t&eacute; fait sur la mise en sc&egrave;ne. De l&rsquo;introduction &agrave; la sc&egrave;ne finale, le jeu nous propose plusieurs petites sc&egrave;nes renfor&ccedil;ant l&rsquo;immersion : que ce soit les sc&egrave;nes d&rsquo;ascenseur rappelant celles des Metroid Prime (m&ecirc;me si elles souffrent de quelques ralentissements), les quelques s&eacute;quences surprises, ou encore les sc&egrave;nes suivant un contre sur un boss un peu &agrave; la mani&egrave;re d&rsquo;un QTE (Quick Time Event).</span></div>
        <div style="text-align: justify;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;"><img class="materialboxed img-top-left" src="https://image.noelshack.com/fichiers/2017/46/5/1510876740-contre-metroid.jpg" alt="Metroid Samus Return contre - zhato.fr" width="100%" height="auto" />Ce dit contre, qui est l&rsquo;une des principales nouveaut&eacute;s apport&eacute;es au gameplay de la s&eacute;rie, va permettre &agrave; Samus de contrecarrer une attaque rapide d&rsquo;un ennemi permettant ensuite de lui assigner quelques lasers ou missiles en guise de contre-attaque. Certes l&rsquo;id&eacute;e est plaisante et tr&egrave;s bien mise en sc&egrave;ne, mais je ne vous cache pas mon impression de &ldquo;simplification&rdquo; du jeu. Pour pas mal de boss, il vous suffira d&rsquo;attendre le bon moment pour y glisser un contre et pouvoir lui placer une rafale de missile sans trop d&rsquo;efforts. De m&ecirc;me pour les ennemis de bases : entre le choix de devoir tirer jusqu&rsquo;&agrave; une dizaine de fois sur un monstre pour le tuer ou bien d&rsquo;attendre sagement de le contra-attaquer et le vaincre d&rsquo;un seul coup, le choix est vite fait. D&rsquo;autant plus que les r&eacute;compenses seront plus grandes en proc&eacute;dant ainsi, notamment en Aeion, une &eacute;nergie permettant d&rsquo;utiliser des capacit&eacute;s tel qu&rsquo;un scan des environs. </span></div>
        <div style="text-align: justify;"><span style="font-weight: 400;">Et c&rsquo;est bien l&agrave; un reproche que j&rsquo;ai pu faire au jeu : sa difficult&eacute; un peu l&eacute;g&egrave;re &agrave; mon go&ucirc;t. Je dirais que l&rsquo;ajustement de la difficult&eacute; a &eacute;t&eacute; fait essentiellement sur la quantit&eacute; de vie des monstres et leurs d&eacute;g&acirc;ts. Certains pourront dire que si ce contre rend le jeu tellement facile, pourquoi je ne m&rsquo;en priverais pas ? Principalement car les monstres du jeu sont de v&eacute;ritables &ldquo;sacs &agrave; PV (point de vie)&rdquo; ! M&ecirc;me en utilisant le contre, la plupart des combats de boss sont assez longs. Lorsque l&rsquo;on affronte ces derniers, il s&rsquo;agit davantage d&rsquo;un marathon que d&rsquo;un affrontement intense. Les patterns des boss sont assez simples &agrave; comprendre, de ce fait une fois ce pattern compris, il sera tr&egrave;s ais&eacute; de perfect un boss, m&ecirc;me les plus retors. Par contre, le moindre coup fait fondre votre barre de vie comme neige au soleil, ce qui ne pardonne pas beaucoup les erreurs. Il vous faudra donc une certaine endurance, certes pour r&eacute;aliser des actions simples, mais sur un combat qui peut durer 4 &agrave; 5 minutes sans temps morts le risque de faire une erreur augmente avec la fatigue d&rsquo;un affrontement trop long.</span></div>
        <figure class="grey lighten-2 center" style="display: block; margin-left: auto; margin-right: auto; width: 100%;"><img class="materialboxed center" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" src="https://image.noelshack.com/fichiers/2017/46/5/1510876740-metroid-vs-samus.jpg" alt="Metroid Samus Return cin&eacute;matique - Zhato.fr" />
        <figcaption class="center-align">"Il est mort ?"</figcaption>
        </figure>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Le jeu consistant essentiellement &agrave; &eacute;radiquer l&rsquo;esp&egrave;ce des Metroid implique tacitement qu&rsquo;ils vont repr&eacute;senter la plupart de vos combats de boss. Une quarantaine est &agrave; tuer r&eacute;partie sur plusieurs de leur stades d&rsquo;&eacute;volutions. Ce qui fait que, mis &agrave; part un ou deux d&eacute;tail pr&egrave;s, quasiment tous vos combats contre ces derniers se ressembleront. Les premiers affrontements d&rsquo;une esp&egrave;ce seront plus difficiles car vous ne connaissez pas leurs comportements. Par contre pour les autres si vous avez bien saisi la fa&ccedil;on de les battre, &ccedil;a ne sera qu&rsquo;un r&eacute;cital du m&ecirc;me sch&eacute;ma que le combat pr&eacute;c&eacute;dent, d&rsquo;autant plus que plus l&rsquo;aventure avance et plus Samus gagne en puissance ce qui donne la sensation de juste &eacute;craser un pauvre insecte pour les esp&egrave;ces les moins &eacute;volu&eacute;s. Mais le rythme plut&ocirc;t malin du jeu fera en sorte que ce soit juste &agrave; ce moment o&ugrave; une petite lassitude due &agrave; la r&eacute;p&eacute;tition commence &agrave; se sentir, qu&rsquo;un nouveau stade d&rsquo;&eacute;volution ou nouvel ennemi appara&icirc;t.</span></div>
        <div style="text-align: justify;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;"><img class="materialboxed img-top-right" src="https://image.noelshack.com/fichiers/2017/46/5/1510876740-dual-screen.jpg" alt="Image dual screen Metroid Samus Return - Zhato.fr" width="100%" height="auto" />D&rsquo;un point de vue jouabilit&eacute;, le maniement de la chasseuse de primes est globalement agr&eacute;able et offre davantage de souplesse que dans les pr&eacute;c&eacute;dents opus 2D, particuli&egrave;rement gr&acirc;ce &agrave; cette vis&eacute;e bien plus pr&eacute;cise permettant tirer &agrave; 360&deg; (auparavant la vis&eacute;e se faisait sur 8 directions). J&rsquo;ai cependant pu noter quelques soucis d&rsquo;ergonomie pour certaines choses, comme pour la boule morphing par exemple. Il existe bien un raccourci pour se transformer en appuyant sur l&rsquo;&eacute;cran tactile, mais avec positionnement des mains sur la console, l&rsquo;acc&egrave;s n&rsquo;est pas des plus instinctifs. Ce genre de probl&egrave;me peut para&icirc;tre anodin, mais dans des moments d&rsquo;urgences o&ugrave; la moindre erreur est punie s&eacute;v&egrave;rement, &ccedil;a l&rsquo;est beaucoup moins. Il peut s&rsquo;av&eacute;rer tr&egrave;s frustrant de se prendre un coup faisant extr&ecirc;mement mal ou de mourir sur ce type d&rsquo;erreur car madame n&rsquo;a pas voulu se mettre en boule ou encore qu&rsquo;elle n&rsquo;arrive pas &agrave; encha&icirc;ner des sauts vrill&eacute;s. &nbsp;</span></div>
        <div style="text-align: justify;"><span style="font-weight: 400;">Pour ce qui est de l&rsquo;utilisation du double &eacute;cran de la 3DS, celle-ci est tr&egrave;s utile. Cela permet d&rsquo;avoir en permanence la carte de la zone sur l&rsquo;&eacute;cran inf&eacute;rieur, ce qui &eacute;vite de nombreux aller-retour dans les menus. Et cerise sur le g&acirc;teau, il est m&ecirc;me possible de positionner des marqueurs sur la carte, tr&egrave;s pratique dans un jeu du genre &ldquo;Metroidvania&rdquo;. </span></div>
        <div style="text-align: justify;">&nbsp;<span style="font-weight: 400;">J&rsquo;ai parl&eacute; un peu plus haut des capacit&eacute;s utilisant de l&rsquo;&eacute;nergie Aeion, qui est un autre point sur le tableau des nouveaut&eacute;s. Il en existe quatre qui permettront de vous aider dans votre progression. La premi&egrave;re est un scan autour de vous, r&eacute;v&eacute;lant la partie de la carte du p&eacute;rim&egrave;tre o&ugrave; vous vous trouvez ainsi que les blocs destructibles. Libre &agrave; vous d\'utiliser ou non cette comp&eacute;tence qui est optionnelle pour continuer contrairement aux 3 autres. </span></div>
        <div style="text-align: justify;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Niveau dur&eacute;e de vie, celle-ci est un peu sup&eacute;rieure aux pr&eacute;c&eacute;dents &eacute;pisode 2D. Pour ma part j&rsquo;ai boucl&eacute; le jeu, en prenant mon temps, au bout de 9-10h en &eacute;tant &agrave; environ 45%. La plan&egrave;te SR388 regorge de secrets qui vous occupera quelques heures suppl&eacute;mentaires si vous voulez le 100% (2-3h en plus pour moi), sans oublier le fait qu&rsquo;une fois l&rsquo;aventure termin&eacute; le mode Difficile est d&eacute;bloqu&eacute;. Et comme &agrave; son habitude, le jeu poss&egrave;de plusieurs images de fins en fonction de votre temps, soit 3 par mode de difficult&eacute;.</span></div>
        <div style="text-align: justify; text-indent: 20px;"><span style="font-weight: 400;">Mais il reste un gros b&eacute;mol au titre que j&rsquo;ai beaucoup de mal &agrave; dig&eacute;rer : malgr&eacute; tous vos efforts il vous sera impossible de d&eacute;bloquer tout le contenu pr&eacute;sent sur la cartouche sans repasser &agrave; la caisse. En effet, le jeu est compatible avec les amiibo de la s&eacute;rie Metroid, et ces derniers seront votre unique moyen d&rsquo;avoir acc&egrave;s &agrave; tout, et je trouve &ccedil;a vraiment scandaleux de la part de Nintendo (d&rsquo;autant plus que, soit dit en passant, certains de ces amiibos sont tr&egrave;s difficilement trouvables au prix &ldquo;normal&rdquo;). Dans ce que d&eacute;bloque les quatres amiibo, il y a notamment le mode Fusion (mode de difficult&eacute; ultime du jeu), mais aussi le SoundTest, des artworks et des bonus en jeu.</span></div>
        <div style="text-align: justify; text-indent: 20px;">&nbsp;</div>
        <div style="text-indent: 20px;"><span style="font-weight: 400;"><img class="materialboxed" style="display: block; margin-left: auto; margin-right: auto; width: 100%;" src="https://image.noelshack.com/fichiers/2017/46/5/1510876740-samus-intro.jpg" alt="Samus Intro Metroid Samus Return - Zhato.fr" /></span></div>
        <div style="text-align: justify;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px; padding: 15px; background-color: rgba(0,0,0,0.5); color: white;"><strong>Pour conclure, ce remake de Metroid II : Return of Samus m&eacute;rite son appellation. Il r&eacute;interpr&egrave;te habilement le jeu dont il est tir&eacute;, tout en approfondissant son univers avec des ajouts plaisants et coh&eacute;rents, avec en plus quelques &eacute;l&eacute;ments d&eacute;di&eacute;s aux fans de la s&eacute;rie. C&rsquo;est d&rsquo;ailleurs ce que l&rsquo;on pourrait retenir du jeu : il comblera tous les joueurs. Son accessibilit&eacute; en fait un tr&egrave;s bon &eacute;pisode pour d&eacute;couvrir la s&eacute;rie, tandis que les fans auront l&rsquo;acc&egrave;s &agrave; un &eacute;pisode cl&eacute; de la saga dont ils n&rsquo;ont peut &ecirc;tre jamais pu jouer et qui est rempli d&rsquo;intentions &agrave; leur &eacute;gard, m&ecirc;me si certains trouveront que le jeu ne leur pose pas de grandes difficult&eacute;s (en mode normal tout du moins). Le pari est donc globalement r&eacute;ussi pour MercurySteam, qui avait l&agrave; un dossier assez complexe et tr&egrave;s surveill&eacute; par les fans tant les stigmates d&rsquo;un certain Metroid Prime Federation Force restent pr&eacute;sents dans leurs esprits. Retour r&eacute;ussi de Samus Aran, en attendant le futur et tr&egrave;s attendu Metroid Prime 4.</strong></div>
        <div style="text-align: justify; text-indent: 20px;">&nbsp;</div>
        <div style="text-align: justify; text-indent: 20px;"><br /><em>Compl&eacute;ment : certains pourront le noter, je n&rsquo;ai pas parl&eacute; du Project AM2R durant cet article. Pour ceux qui ne le connaissent pas, il s&rsquo;agit d&rsquo;un autre remake de Metroid II mais ici d&eacute;velopp&eacute; par un amateur, fan de la s&eacute;rie, avec le moteur de Metroid Zero Mission.</em></div>
        <div style="text-align: justify;"><em>H&eacute;las le projet a &eacute;t&eacute; avort&eacute; en ao&ucirc;t 2016 par Nintendo qui ne rigole absolument pas avec leurs licences et condamne tout fan-games. </em></div>
        <div style="text-align: justify;"><em>Difficile donc de ne pas comparer le remake de MercurySteam avec ce dernier. Mais je dirais que les deux sont compl&eacute;mentaires puisqu&rsquo;ils fournissent chacun leur interpr&eacute;tation du jeu original, avec leur lot d&rsquo;ajouts propres. Le premier tend vers plus d\'accessibilit&eacute; et une r&eacute;alisation solide, alors qu&rsquo;AM2R est un jeu cr&eacute;&eacute; par un fan et pour les fans mettant l&rsquo;accent sur la fid&eacute;lit&eacute; et le respect de l&rsquo;esprit de la s&eacute;rie. &nbsp;</em></div>
        <div style="text-align: justify;"><em>Je n&rsquo;aurais qu&rsquo;un seul conseil &agrave; donner &agrave; ce sujet : si vous &ecirc;tes fan de la s&eacute;rie, jouez aux deux ! Je ne suis pas un grand sp&eacute;cialiste de la saga, mais j&rsquo;ai ma petite pr&eacute;f&eacute;rence pour AM2R, mais &ccedil;a n&rsquo;engage que moi.</em></div>
        ');
        $article2->setAuthor('Zhato');
        $article2->setCreatedAt(new \DateTimeImmutable());
        $article2->setUpdatedAt(new \DateTimeImmutable());
        $article2->setImage('test.jpg');
        $article2->setSlug('metroid-samus-returns-retour-de-letre-aime-1');
        $article2->setIsPublished(true);

        $manager->persist($article1);
        $manager->persist($article2);
        $manager->flush();
    }
}