<?php
header('Content-Type: application/json; charset=utf-8');

$last_names = [
    ['kanji' => '佐藤', 'yomi' => 'さとう', 'romaji' => 'Satō'],
    ['kanji' => '鈴木', 'yomi' => 'すずき', 'romaji' => 'Suzuki'],
    ['kanji' => '高橋', 'yomi' => 'たかはし', 'romaji' => 'Takahashi'],
    ['kanji' => '田中', 'yomi' => 'たなか', 'romaji' => 'Tanaka'],
    ['kanji' => '渡辺', 'yomi' => 'わたなべ', 'romaji' => 'Watanabe'],
    ['kanji' => '伊藤', 'yomi' => 'いとう', 'romaji' => 'Itō'],
    ['kanji' => '山本', 'yomi' => 'やまもと', 'romaji' => 'Yamamoto'],
    ['kanji' => '中村', 'yomi' => 'なかむら', 'romaji' => 'Nakamura'],
    ['kanji' => '小林', 'yomi' => 'こばやし', 'romaji' => 'Kobayashi'],
    ['kanji' => '加藤', 'yomi' => 'かとう', 'romaji' => 'Katō'],
    ['kanji' => '吉田', 'yomi' => 'よしだ', 'romaji' => 'Yoshida'],
    ['kanji' => '山田', 'yomi' => 'やまだ', 'romaji' => 'Yamada'],
    ['kanji' => '井上', 'yomi' => 'いのうえ', 'romaji' => 'Inoue'],
    ['kanji' => '木村', 'yomi' => 'きむら', 'romaji' => 'Kimura'],
    ['kanji' => '林', 'yomi' => 'はやし', 'romaji' => 'Hayashi'],
    ['kanji' => '清水', 'yomi' => 'しみず', 'romaji' => 'Shimizu'],
    ['kanji' => '斎藤', 'yomi' => 'さいとう', 'romaji' => 'Saitō'],
    ['kanji' => '山口', 'yomi' => 'やまぐち', 'romaji' => 'Yamaguchi'],
    ['kanji' => '松本', 'yomi' => 'まつもと', 'romaji' => 'Matsumoto'],
    ['kanji' => '阿部', 'yomi' => 'あべ', 'romaji' => 'Abe'],
    ['kanji' => '大野', 'yomi' => 'おおの', 'romaji' => 'Ōno'],
    ['kanji' => '中川', 'yomi' => 'なかがわ', 'romaji' => 'Nakagawa'],
    ['kanji' => '石井', 'yomi' => 'いしい', 'romaji' => 'Ishii'],
    ['kanji' => '森', 'yomi' => 'もり', 'romaji' => 'Mori'],
    ['kanji' => '原', 'yomi' => 'はら', 'romaji' => 'Hara'],
    ['kanji' => '大塚', 'yomi' => 'おおつか', 'romaji' => 'Ōtsuka'],
    ['kanji' => '長谷川', 'yomi' => 'はせがわ', 'romaji' => 'Hasegawa'],
    ['kanji' => '西村', 'yomi' => 'にしむら', 'romaji' => 'Nishimura'],
    ['kanji' => '岡田', 'yomi' => 'おかだ', 'romaji' => 'Okada'],
    ['kanji' => '野口', 'yomi' => 'のぐち', 'romaji' => 'Noguchi'],
];

$male_first_names = [
    ['kanji' => '大輔', 'yomi' => 'だいすけ', 'romaji' => 'Daisuke'],
    ['kanji' => '翔太', 'yomi' => 'しょうた', 'romaji' => 'Shōta'],
    ['kanji' => '拓也', 'yomi' => 'たくや', 'romaji' => 'Takuya'],
    ['kanji' => '健太', 'yomi' => 'けんた', 'romaji' => 'Kenta'],
    ['kanji' => '直樹', 'yomi' => 'なおき', 'romaji' => 'Naoki'],
    ['kanji' => '亮', 'yomi' => 'りょう', 'romaji' => 'Ryō'],
    ['kanji' => '誠', 'yomi' => 'まこと', 'romaji' => 'Makoto'],
    ['kanji' => '一郎', 'yomi' => 'いちろう', 'romaji' => 'Ichirō'],
    ['kanji' => '和也', 'yomi' => 'かずや', 'romaji' => 'Kazuya'],
    ['kanji' => '隆', 'yomi' => 'たかし', 'romaji' => 'Takashi'],
    ['kanji' => '勇気', 'yomi' => 'ゆうき', 'romaji' => 'Yūki'],
    ['kanji' => '達也', 'yomi' => 'たつや', 'romaji' => 'Tatsuya'],
    ['kanji' => '修平', 'yomi' => 'しゅうへい', 'romaji' => 'Shūhei'],
    ['kanji' => '海斗', 'yomi' => 'かいと', 'romaji' => 'Kaito'],
    ['kanji' => '蓮', 'yomi' => 'れん', 'romaji' => 'Ren'],
    ['kanji' => '悠真', 'yomi' => 'ゆうま', 'romaji' => 'Yūma'],
    ['kanji' => '湊', 'yomi' => 'みなと', 'romaji' => 'Minato'],
    ['kanji' => '陽翔', 'yomi' => 'はると', 'romaji' => 'Haruto'],
    ['kanji' => '蒼', 'yomi' => 'あおい', 'romaji' => 'Aoi'],
    ['kanji' => '颯太', 'yomi' => 'そうた', 'romaji' => 'Sōta'],
];

$female_first_names = [
    ['kanji' => '美咲', 'yomi' => 'みさき', 'romaji' => 'Misaki'],
    ['kanji' => '優子', 'yomi' => 'ゆうこ', 'romaji' => 'Yūko'],
    ['kanji' => '愛', 'yomi' => 'あい', 'romaji' => 'Ai'],
    ['kanji' => '由美', 'yomi' => 'ゆみ', 'romaji' => 'Yumi'],
    ['kanji' => '美香', 'yomi' => 'みか', 'romaji' => 'Mika'],
    ['kanji' => '恵', 'yomi' => 'めぐみ', 'romaji' => 'Megumi'],
    ['kanji' => '桜', 'yomi' => 'さくら', 'romaji' => 'Sakura'],
    ['kanji' => '真由美', 'yomi' => 'まゆみ', 'romaji' => 'Mayumi'],
    ['kanji' => '直子', 'yomi' => 'なおこ', 'romaji' => 'Naoko'],
    ['kanji' => 'さおり', 'yomi' => 'さおり', 'romaji' => 'Saori'],
    ['kanji' => '茜', 'yomi' => 'あかね', 'romaji' => 'Akane'],
    ['kanji' => '結衣', 'yomi' => 'ゆい', 'romaji' => 'Yui'],
    ['kanji' => '陽菜', 'yomi' => 'ひな', 'romaji' => 'Hina'],
    ['kanji' => '凛', 'yomi' => 'りん', 'romaji' => 'Rin'],
    ['kanji' => '詩織', 'yomi' => 'しおり', 'romaji' => 'Shiori'],
    ['kanji' => '七海', 'yomi' => 'ななみ', 'romaji' => 'Nanami'],
    ['kanji' => '美月', 'yomi' => 'みづき', 'romaji' => 'Mizuki'],
    ['kanji' => '楓', 'yomi' => 'かえで', 'romaji' => 'Kaede'],
    ['kanji' => '莉子', 'yomi' => 'りこ', 'romaji' => 'Riko'],
    ['kanji' => '杏', 'yomi' => 'あんず', 'romaji' => 'Anzu'],
];

function pick_random($array) {
    return $array[array_rand($array)];
}

function generate_name($gender = 'random') {
    global $last_names, $male_first_names, $female_first_names;

    $last = pick_random($last_names);

    if ($gender === 'male') {
        $first = pick_random($male_first_names);
    } elseif ($gender === 'female') {
        $first = pick_random($female_first_names);
    } else {
        $pool = array_merge($male_first_names, $female_first_names);
        $first = pick_random($pool);
    }

    return [
        'last' => $last,
        'first' => $first,
        'kanji' => $last['kanji'] . ' ' . $first['kanji'],
        'yomi' => $last['yomi'] . ' ' . $first['yomi'],
        'romaji' => $last['romaji'] . ' ' . $first['romaji'],
    ];
}

$gender = $_GET['gender'] ?? 'random';
$count = isset($_GET['count']) ? max(1, min(50, intval($_GET['count']))) : 5;

if (!in_array($gender, ['male', 'female', 'random'])) {
    $gender = 'random';
}

$names = [];
for ($i = 0; $i < $count; $i++) {
    $names[] = generate_name($gender);
}

echo json_encode($names, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
