// 偽名生成 - Japanese Pseudonym Generator
// Converted from generate.php

const lastNames = [
    { kanji: '佐藤', yomi: 'さとう', romaji: 'Satō' },
    { kanji: '鈴木', yomi: 'すずき', romaji: 'Suzuki' },
    { kanji: '高橋', yomi: 'たかはし', romaji: 'Takahashi' },
    { kanji: '田中', yomi: 'たなか', romaji: 'Tanaka' },
    { kanji: '渡辺', yomi: 'わたなべ', romaji: 'Watanabe' },
    { kanji: '伊藤', yomi: 'いとう', romaji: 'Itō' },
    { kanji: '山本', yomi: 'やまもと', romaji: 'Yamamoto' },
    { kanji: '中村', yomi: 'なかむら', romaji: 'Nakamura' },
    { kanji: '小林', yomi: 'こばやし', romaji: 'Kobayashi' },
    { kanji: '加藤', yomi: 'かとう', romaji: 'Katō' },
    { kanji: '吉田', yomi: 'よしだ', romaji: 'Yoshida' },
    { kanji: '山田', yomi: 'やまだ', romaji: 'Yamada' },
    { kanji: '井上', yomi: 'いのうえ', romaji: 'Inoue' },
    { kanji: '木村', yomi: 'きむら', romaji: 'Kimura' },
    { kanji: '林', yomi: 'はやし', romaji: 'Hayashi' },
    { kanji: '清水', yomi: 'しみず', romaji: 'Shimizu' },
    { kanji: '斎藤', yomi: 'さいとう', romaji: 'Saitō' },
    { kanji: '山口', yomi: 'やまぐち', romaji: 'Yamaguchi' },
    { kanji: '松本', yomi: 'まつもと', romaji: 'Matsumoto' },
    { kanji: '阿部', yomi: 'あべ', romaji: 'Abe' },
    { kanji: '大野', yomi: 'おおの', romaji: 'Ōno' },
    { kanji: '中川', yomi: 'なかがわ', romaji: 'Nakagawa' },
    { kanji: '石井', yomi: 'いしい', romaji: 'Ishii' },
    { kanji: '森', yomi: 'もり', romaji: 'Mori' },
    { kanji: '原', yomi: 'はら', romaji: 'Hara' },
    { kanji: '大塚', yomi: 'おおつか', romaji: 'Ōtsuka' },
    { kanji: '長谷川', yomi: 'はせがわ', romaji: 'Hasegawa' },
    { kanji: '西村', yomi: 'にしむら', romaji: 'Nishimura' },
    { kanji: '岡田', yomi: 'おかだ', romaji: 'Okada' },
    { kanji: '野口', yomi: 'のぐち', romaji: 'Noguchi' },
];

const maleFirstNames = [
    { kanji: '大輔', yomi: 'だいすけ', romaji: 'Daisuke' },
    { kanji: '翔太', yomi: 'しょうた', romaji: 'Shōta' },
    { kanji: '拓也', yomi: 'たくや', romaji: 'Takuya' },
    { kanji: '健太', yomi: 'けんた', romaji: 'Kenta' },
    { kanji: '直樹', yomi: 'なおき', romaji: 'Naoki' },
    { kanji: '亮', yomi: 'りょう', romaji: 'Ryō' },
    { kanji: '誠', yomi: 'まこと', romaji: 'Makoto' },
    { kanji: '一郎', yomi: 'いちろう', romaji: 'Ichirō' },
    { kanji: '和也', yomi: 'かずや', romaji: 'Kazuya' },
    { kanji: '隆', yomi: 'たかし', romaji: 'Takashi' },
    { kanji: '勇気', yomi: 'ゆうき', romaji: 'Yūki' },
    { kanji: '達也', yomi: 'たつや', romaji: 'Tatsuya' },
    { kanji: '修平', yomi: 'しゅうへい', romaji: 'Shūhei' },
    { kanji: '海斗', yomi: 'かいと', romaji: 'Kaito' },
    { kanji: '蓮', yomi: 'れん', romaji: 'Ren' },
    { kanji: '悠真', yomi: 'ゆうま', romaji: 'Yūma' },
    { kanji: '湊', yomi: 'みなと', romaji: 'Minato' },
    { kanji: '陽翔', yomi: 'はると', romaji: 'Haruto' },
    { kanji: '蒼', yomi: 'あおい', romaji: 'Aoi' },
    { kanji: '颯太', yomi: 'そうた', romaji: 'Sōta' },
];

const femaleFirstNames = [
    { kanji: '美咲', yomi: 'みさき', romaji: 'Misaki' },
    { kanji: '優子', yomi: 'ゆうこ', romaji: 'Yūko' },
    { kanji: '愛', yomi: 'あい', romaji: 'Ai' },
    { kanji: '由美', yomi: 'ゆみ', romaji: 'Yumi' },
    { kanji: '美香', yomi: 'みか', romaji: 'Mika' },
    { kanji: '恵', yomi: 'めぐみ', romaji: 'Megumi' },
    { kanji: '桜', yomi: 'さくら', romaji: 'Sakura' },
    { kanji: '真由美', yomi: 'まゆみ', romaji: 'Mayumi' },
    { kanji: '直子', yomi: 'なおこ', romaji: 'Naoko' },
    { kanji: 'さおり', yomi: 'さおり', romaji: 'Saori' },
    { kanji: '茜', yomi: 'あかね', romaji: 'Akane' },
    { kanji: '結衣', yomi: 'ゆい', romaji: 'Yui' },
    { kanji: '陽菜', yomi: 'ひな', romaji: 'Hina' },
    { kanji: '凛', yomi: 'りん', romaji: 'Rin' },
    { kanji: '詩織', yomi: 'しおり', romaji: 'Shiori' },
    { kanji: '七海', yomi: 'ななみ', romaji: 'Nanami' },
    { kanji: '美月', yomi: 'みづき', romaji: 'Mizuki' },
    { kanji: '楓', yomi: 'かえで', romaji: 'Kaede' },
    { kanji: '莉子', yomi: 'りこ', romaji: 'Riko' },
    { kanji: '杏', yomi: 'あんず', romaji: 'Anzu' },
];

function pickRandom(array) {
    return array[Math.floor(Math.random() * array.length)];
}

/**
 * Generate a single Japanese pseudonym.
 * @param {'male'|'female'|'random'} [gender='random']
 * @returns {{last: object, first: object, kanji: string, yomi: string, romaji: string}}
 */
export function generateName(gender = 'random') {
    const last = pickRandom(lastNames);

    let first;
    if (gender === 'male') {
        first = pickRandom(maleFirstNames);
    } else if (gender === 'female') {
        first = pickRandom(femaleFirstNames);
    } else {
        first = pickRandom([...maleFirstNames, ...femaleFirstNames]);
    }

    return {
        last,
        first,
        kanji: last.kanji + ' ' + first.kanji,
        yomi: last.yomi + ' ' + first.yomi,
        romaji: last.romaji + ' ' + first.romaji,
    };
}

/**
 * Generate multiple Japanese pseudonyms.
 * @param {'male'|'female'|'random'} [gender='random']
 * @param {number} [count=5] - Number of names to generate (clamped 1-50)
 * @returns {Array<{last: object, first: object, kanji: string, yomi: string, romaji: string}>}
 */
export function generateNames(gender = 'random', count = 5) {
    if (!['male', 'female', 'random'].includes(gender)) {
        gender = 'random';
    }
    count = Math.max(1, Math.min(50, Math.floor(count) || 5));

    const names = [];
    for (let i = 0; i < count; i++) {
        names.push(generateName(gender));
    }
    return names;
}
