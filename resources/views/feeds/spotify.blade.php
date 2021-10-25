<?=
/* Using an echo tag here so the `<? ... ?>` won't get parsed as short tags */
    '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL ?>
    <rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd">
    <channel>
        <title><![CDATA[{{ $meta['title'] }}]]></title>
        <link><![CDATA[{{ url($meta['link']) }}]]></link>
        @if(!empty($meta['image']))
            <image>
                <url>{{ $meta['image'] }}</url>
                <title><![CDATA[{{ $meta['title'] }}]]></title>
                <link><![CDATA[{{ url($meta['link']) }}]]></link>
            </image>
        @endif
        <description><![CDATA[{{ $meta['description'] }}]]></description>
        <language>{{ $meta['language'] }}</language>
        <pubDate>{{ $meta['updated'] }}</pubDate>

        <itunes:author>Max Bailey</itunes:author>
        <itunes:category text="Coding" />
        <itunes:type>episodic</itunes:type>
        <itunes:image
                href="{{$meta['image']}}" />

        @foreach($items as $item)
            <item>
                <guid isPermaLink="false">>{{ $item->id }}</guid>
                <title><![CDATA[{{ $item->title }}]]></title>
                <description><![CDATA[{!! $item->summary !!}]]></description>
                <pubDate>{{ $item->timestamp() }}</pubDate>
                <itunes:duration>2700</itunes:duration>
                <enclosure
                        url="{{$item->enclosure}}" type="audio/mpeg" length="21830720"/>
            </item>
        @endforeach
    </channel>
</rss>
