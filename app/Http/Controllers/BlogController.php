<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use App\Models\Blog\PostViewStat;
use Carbon\Carbon;
use Illuminate\Contracts\View\View;

class BlogController extends Controller
{
    public function index(): View
    {
        $posts = Post::query()
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->orderByDesc('published_at')
            ->with(['categories', 'tags', 'seo'])
            ->paginate(9);

        return view('blog.index', [
            'posts' => $posts,
        ]);
    }

    public function show(string $slug): View
    {
        $post = Post::query()
            ->where('slug', $slug)
            ->where('is_published', true)
            ->with(['categories', 'tags', 'seo'])
            ->first();

        if ($post) {
            Post::whereKey($post->id)->increment('views');

            $today = Carbon::today()->toDateString();
            $stat = PostViewStat::firstOrCreate([
                'date' => $today,
                'post_id' => $post->id,
            ]);
            $stat->increment('views');

            $relatedPosts = Post::query()
                ->where('is_published', true)
                ->where('id', '!=', $post->id)
                ->whereNotNull('published_at')
                ->orderByDesc('published_at')
                ->with(['categories'])
                ->limit(3)
                ->get();

            if ($relatedPosts->isEmpty()) {
                $relatedPosts = collect($this->getDemoPosts())->take(2);
            }

            return view('blog.show', [
                'post' => $post,
                'relatedPosts' => $relatedPosts,
            ]);
        }

        $demoPosts = $this->getDemoPosts();
        $demoPost = collect($demoPosts)->firstWhere('slug', $slug);

        if ($demoPost) {
            $allDemoPosts = collect($demoPosts)->where('slug', '!=', $slug)->values();

            return view('blog.show', [
                'post' => $demoPost,
                'relatedPosts' => $allDemoPosts,
            ]);
        }

        abort(404);
    }

    /**
     * @return array<int, object>
     */
    private function getDemoPosts(): array
    {
        return [
            (object) [
                'slug' => 'verblisterung-innovative-loesungen',
                'thumbnail' => 'images/home/news-featured.png',
                'title' => 'Verblisterung: Innovative Lösungen für Komfort und Präzision bei der Einnahme von Medikamenten',
                'excerpt' => 'Erfahren Sie mehr über innovative Verblisterungslösungen für eine sichere Medikamenteneinnahme.',
                'content' => '<p>Die Verblisterung von Medikamenten ist eine innovative Lösung, die sowohl Komfort als auch Präzision bei der Einnahme von Medikamenten bietet. Bei der Pflegegruppe Rhein-Main setzen wir auf modernste Verblisterungstechnologien, um unseren Patienten die bestmögliche Versorgung zu gewährleisten.</p>
                <h2>Was ist Verblisterung?</h2>
                <p>Verblisterung bezeichnet das individuelle Verpacken von Medikamenten in Blisterpackungen, die nach Einnahmezeitpunkten sortiert sind. Dies erleichtert die korrekte Einnahme erheblich und reduziert das Risiko von Medikationsfehlern.</p>
                <h2>Vorteile der Verblisterung</h2>
                <ul>
                <li>Erhöhte Sicherheit bei der Medikamenteneinnahme</li>
                <li>Vereinfachte Handhabung für Patienten und Pflegekräfte</li>
                <li>Bessere Übersicht über die einzunehmenden Medikamente</li>
                <li>Reduzierung von Medikationsfehlern</li>
                </ul>
                <p>Kontaktieren Sie uns, um mehr über unsere Verblisterungsservices zu erfahren.</p>',
                'categories' => collect([(object) ['title' => 'Kategorie']]),
                'tags' => collect([]),
                'published_at' => now(),
                'seo' => null,
            ],
            (object) [
                'slug' => 'pflegetipps-fuer-den-alltag',
                'thumbnail' => null,
                'title' => 'Pflegetipps für den Alltag: So unterstützen Sie Ihre Angehörigen optimal',
                'excerpt' => 'Praktische Tipps für die häusliche Pflege Ihrer Angehörigen.',
                'content' => '<p>Die Pflege von Angehörigen zu Hause kann eine Herausforderung sein. Mit den richtigen Tipps und Strategien können Sie jedoch eine optimale Unterstützung bieten.</p>
                <h2>Grundlegende Pflegetipps</h2>
                <p>Eine gute Pflege beginnt mit Verständnis und Geduld. Hier sind einige grundlegende Tipps:</p>
                <ul>
                <li>Schaffen Sie eine sichere und komfortable Umgebung</li>
                <li>Etablieren Sie feste Routinen für den Tagesablauf</li>
                <li>Achten Sie auf ausgewogene Ernährung und ausreichend Flüssigkeit</li>
                <li>Fördern Sie soziale Kontakte und Aktivitäten</li>
                </ul>
                <h2>Professionelle Unterstützung</h2>
                <p>Scheuen Sie sich nicht, professionelle Hilfe in Anspruch zu nehmen. Die Pflegegruppe Rhein-Main steht Ihnen mit Rat und Tat zur Seite.</p>',
                'categories' => collect([(object) ['title' => 'Pflege']]),
                'tags' => collect([]),
                'published_at' => now(),
                'seo' => null,
            ],
            (object) [
                'slug' => 'neue-mitarbeiter-im-team',
                'thumbnail' => null,
                'title' => 'Neue Mitarbeiter im Team: Willkommen bei Pflegegruppe Rhein-Main',
                'excerpt' => 'Wir begrüßen neue Teammitglieder in unserer Pflegegruppe.',
                'content' => '<p>Wir freuen uns, neue talentierte Mitarbeiter in unserem Team begrüßen zu dürfen. Unser wachsendes Team ermöglicht es uns, noch mehr Menschen in der Region mit qualitativ hochwertiger Pflege zu versorgen.</p>
                <h2>Unser Team wächst</h2>
                <p>Die Pflegegruppe Rhein-Main legt großen Wert auf qualifiziertes und engagiertes Personal. Unsere neuen Teammitglieder bringen frische Perspektiven und wertvolle Erfahrungen mit.</p>
                <h2>Karriere bei uns</h2>
                <p>Interessieren Sie sich für eine Karriere in der Pflege? Wir sind immer auf der Suche nach motivierten Menschen, die unser Team verstärken möchten. Besuchen Sie unsere Karriereseite für aktuelle Stellenangebote.</p>',
                'categories' => collect([(object) ['title' => 'Team']]),
                'tags' => collect([]),
                'published_at' => now(),
                'seo' => null,
            ],
        ];
    }
}
