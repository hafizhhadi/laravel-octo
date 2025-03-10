<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Traits\ResponseAPI;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\RatingRequest;
use App\Repositories\UserRepository;
use App\Http\Resources\MovieResource;
use App\Repositories\GenreRepository;
use App\Repositories\MovieRepository;
use App\Repositories\RatingRepository;
use App\Repositories\TheaterRepository;
use App\Repositories\DirectorRepository;
use App\Repositories\LanguageRepository;
use App\Repositories\PerformerRepository;
use App\Http\Resources\GenreMovieResource;
use App\Http\Resources\MovieTheaterResource;

class MovieController extends Controller
{
    use ResponseAPI;

    private $movieRepo;
    private $directorRepo;
    private $genreRepo;
    private $performerRepo;
    private $languageRepo;
    private $ratingRepo;
    private $userRepo;
    private $theaterRepo;

    public function __construct(
        MovieRepository $movieRepo,
        DirectorRepository $directorRepo,
        GenreRepository $genreRepo,
        PerformerRepository $performerRepo,
        LanguageRepository $languageRepo,
        RatingRepository $ratingRepo,
        UserRepository $userRepo,
        TheaterRepository $theaterRepo,
    )
    {
        $this->movieRepo = $movieRepo;
        $this->directorRepo = $directorRepo;
        $this->genreRepo = $genreRepo;
        $this->performerRepo = $performerRepo;
        $this->languageRepo = $languageRepo;
        $this->ratingRepo = $ratingRepo;
        $this->userRepo = $userRepo;
        $this->theaterRepo = $theaterRepo;
    }

    public function create(MovieRequest $request)
    {
        try {
            /*early return on getting director name, else create new*/
            if (!$director = $this->directorRepo->findDirectorName($request->director)) {
                 /*create director*/
                $director = $this->directorRepo->store($request);
            }

            /*create genre*/
            foreach ($request->genres as $genre) {
                /*early return on getting genre name, else create new*/
                if (!$genres = $this->genreRepo->findGenreName($genre)) {
                    $genres = $this->genreRepo->store($genre);
                }

                $genresId[] = $genres->id;
            }

            /*create performer*/
            foreach ($request->performers as $performer) {
                /*early return on getting performer name, else create new*/
                if (!$performers = $this->performerRepo->findPerformerName($performer)) {
                    $performers = $this->performerRepo->store($performer);
                }

                $performersId[] = $performers->id;
            }
            
            /*create language*/
            foreach ($request->languages as $language) {
                /*early return on getting language name, else create new*/
                if (!$languages = $this->languageRepo->findLanguageName($language)) {
                    $languages = $this->languageRepo->store($language);
                }
                
                $languagesId[] = $languages->id;
            }

            $movie = $this->movieRepo->store($request, $director->id);

            $movie->genres()->sync($genresId);
            $movie->performers()->sync($performersId);
            $movie->languages()->sync($languagesId);
            
            return $this->created('Successfully added movie '.$movie->title.' with Movie_ID '.$movie->id);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function rateMovie(RatingRequest $request)
    {
        try {
            /*early return on finding user name*/
            if (!$user = $this->userRepo->findUserName($request->username)) {
                throw new Exception('User Not Found');
            }

            /*early return on movie title*/
            if (!$movie = $this->movieRepo->findMovieTitle($request->movie_title)) {
                throw new Exception('Movie Not Found');
            }

            /*create rating*/
            $this->ratingRepo->store($request, $user->id, $movie->id);

            return $this->created('Successfully added review for the '.$movie->title.' by user: '.$user->name);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function showGenre(Request $request)
    {
        try {
            /*get movie by genre*/
            return $this->success(GenreMovieResource::collection($this->genreRepo->getMovieByGenre($request->genre)), 'Successfully Show Movie By Genre '.$request->genre);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function showPerformer(Request $request)
    {
        try {
            /*search performer*/
            return $this->success(MovieResource::collection($this->movieRepo->searchPerformer($request->performer_name)), 'Successfully Search Movie By Performer '. $request->performer_name);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function newMovie(Request $request)
    {
        try {
            /*fetch latest by movie*/
            return $this->success(MovieResource::collection($this->movieRepo->newMovie($request->release_date)), 'Successfully Fetch Latest Movie');
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function specificMovieTheater(Request $request)
    {
        try {
            /*early return on finding theater name*/
            if (!$theater = $this->theaterRepo->getTheaterName($request->theater_name)) {
                throw new Exception('Theater Not Found');
            }

            /*fetch specific movie by theater and date*/
            return $this->success(MovieTheaterResource::collection($this->movieRepo->getScreentimeByDate($request, $theater)), 'Sucessfully Fetch Movies By Date!');
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    public function specificMovieTimeslot(Request $request)
    {
        try {
            /*early return on finding theater name*/
            if (!$theater = $this->theaterRepo->getTheaterName($request->theater_name)) {
                throw new Exception('Theater Not Found');
            }

            /*fetch specific movie by theater and date and time*/
            return $this->success(MovieTheaterResource::collection($this->movieRepo->getScreentimeByDate($request, $theater)), 'Sucessfully Fetch Movies By Date and Time');
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
