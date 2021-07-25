@extends('layouts.appSec')

@section('content')
    <div class="container pl-96 pr-96">
        <div class="grid grid-cols-3 grid-rows-auto-fit gap-2">
            <div class="flex justify-center items-center">
                <img src="{{asset(Auth::user()->profile_img)}}" alt="" srcset="" width="180" class="rounded-full border-2 border-gray-600">
            </div>
            <div class="grid grid-rows-2 grid-cols-2 justify-items-start align-items-start">
                <p class="text-lg font-medium">
                    {{Auth::user()->name}}
                </p>
                <button class="bg-blue-500 text-white rounded-lg px-3 py-1">
                    Follow
                </button>
                <a href="" class="col-span-2">
                    Edit Profile
                </a>
                <p class="col-span-2">
                    freeCodeCamp
                </p>
                <p class="col-span-2">
                    Cool Description
                </p>
                <p class="col-span-2">
                    link
                </p>
            </div>
            <div class="flex justify-end items-start">
                <button class="text-blue-500">
                    Add New Post
                </button>
            </div>
        </div>

    </div>
    <div class="container pl-96 pr-96 mt-16 grid gap-2 grid-cols-3">
        <div>
            <img class="w-full h-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAaVBMVEUAAAD///8oKCiPj4/7+/sFBQVlZWW9vb35+fn19fXo6OjJyckrKyvMzMxdXV0TExNeXl4wMDBqamq8vLyXl5dXV1fr6+vU1NQNDQ1ubm40NDS0tLQ5OTkeHh6lpaXExMScnJzf399JSUncR1bBAAAC8UlEQVR4nO3aW3PaMBCGYYvIlDMJ4UxSmv7/H1nLxkYywvaaprN03ueiF2Ws0cdubFkiSQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA+B5p86fNH/9Dq/OP3Pun7Lq0PYQs5Gc2BzeR87Dlu5N6MRdvwoF/Ns9keW6rcs2snMiLaBrtqoQDwUVZdX4Zs8kixENk/zsxu7zOnccc6EqYrN0lr/cbcWJsFlFSRV0JXUBrbV7FqG0WUBhRU8JlUUFnE6liWlTQ2Qkmoimh+xss2Hijbi8BRRFVJdxlLepVsf7xpApo7LHzoKoSJtNrhpsqpmXA7N/RrPuYihK6QPMqoDWLoIp7r4LjwZPeaZy516iL6rmYugqWyUUV1JYwqKIxw6pR/QqOZN+ZuoTRRk39Fp3JVm26EuamZhTcbtJrBa24ggoT1m43bhm+DCsopC6hE/4t7h9o0URpwuC5ePjyAr7Jx1KY0N0/p16jBgHlL7EKE+b8KpZJx92Xah6dCYMqPtKiidaETj1iVsFe+yx6EwbPxb4tmihOmNXr7Afs/UUpTrj/8m42dnF3e6qF2oTBSsYZ9twMVptwXwtYf1/sTGfCNHibKL32alSdCW8q+ECj6kwYq6DTp1FVJvTfB8fHs/dcXMirqDFh8Lp0DJfh8ojqEuY728YPmC/DI9tTHalL6G382mKxnTbvo7bRl3B7LVix2K6/L949tonTldA7fLHh69K0drt53h3hbXTL4nY3/GkTNmw6+dtTkueiroSNhy9+o266j6kq4fZ+BevHNr87D6oq4cHkZSoqGOnD4tjGnXOfug+qKGFWptXlmujWfVVFUUBNCV2GQ7RFy0/LiKfnvZe6KtrGw5d51sfvookoS+iq2HD4kjfqScmapvrhiOiwyEX8aE6wFq5Lq199rSVXdfCxGhaWf3lgqeVlHquWb+4Ban4u+V0zURNQzUQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/Kf+AN1iGFg+mCFSAAAAAElFTkSuQmCC" alt="" srcset="">
        </div>
        <div>
            <img class="w-full h-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAaVBMVEUAAAD///8oKCiPj4/7+/sFBQVlZWW9vb35+fn19fXo6OjJyckrKyvMzMxdXV0TExNeXl4wMDBqamq8vLyXl5dXV1fr6+vU1NQNDQ1ubm40NDS0tLQ5OTkeHh6lpaXExMScnJzf399JSUncR1bBAAAC8UlEQVR4nO3aW3PaMBCGYYvIlDMJ4UxSmv7/H1nLxkYywvaaprN03ueiF2Ws0cdubFkiSQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA+B5p86fNH/9Dq/OP3Pun7Lq0PYQs5Gc2BzeR87Dlu5N6MRdvwoF/Ns9keW6rcs2snMiLaBrtqoQDwUVZdX4Zs8kixENk/zsxu7zOnccc6EqYrN0lr/cbcWJsFlFSRV0JXUBrbV7FqG0WUBhRU8JlUUFnE6liWlTQ2Qkmoimh+xss2Hijbi8BRRFVJdxlLepVsf7xpApo7LHzoKoSJtNrhpsqpmXA7N/RrPuYihK6QPMqoDWLoIp7r4LjwZPeaZy516iL6rmYugqWyUUV1JYwqKIxw6pR/QqOZN+ZuoTRRk39Fp3JVm26EuamZhTcbtJrBa24ggoT1m43bhm+DCsopC6hE/4t7h9o0URpwuC5ePjyAr7Jx1KY0N0/p16jBgHlL7EKE+b8KpZJx92Xah6dCYMqPtKiidaETj1iVsFe+yx6EwbPxb4tmihOmNXr7Afs/UUpTrj/8m42dnF3e6qF2oTBSsYZ9twMVptwXwtYf1/sTGfCNHibKL32alSdCW8q+ECj6kwYq6DTp1FVJvTfB8fHs/dcXMirqDFh8Lp0DJfh8ojqEuY728YPmC/DI9tTHalL6G382mKxnTbvo7bRl3B7LVix2K6/L949tonTldA7fLHh69K0drt53h3hbXTL4nY3/GkTNmw6+dtTkueiroSNhy9+o266j6kq4fZ+BevHNr87D6oq4cHkZSoqGOnD4tjGnXOfug+qKGFWptXlmujWfVVFUUBNCV2GQ7RFy0/LiKfnvZe6KtrGw5d51sfvookoS+iq2HD4kjfqScmapvrhiOiwyEX8aE6wFq5Lq199rSVXdfCxGhaWf3lgqeVlHquWb+4Ban4u+V0zURNQzUQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/Kf+AN1iGFg+mCFSAAAAAElFTkSuQmCC" alt="" srcset="">
        </div>
        <div>
            <img class="w-full h-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAaVBMVEUAAAD///8oKCiPj4/7+/sFBQVlZWW9vb35+fn19fXo6OjJyckrKyvMzMxdXV0TExNeXl4wMDBqamq8vLyXl5dXV1fr6+vU1NQNDQ1ubm40NDS0tLQ5OTkeHh6lpaXExMScnJzf399JSUncR1bBAAAC8UlEQVR4nO3aW3PaMBCGYYvIlDMJ4UxSmv7/H1nLxkYywvaaprN03ueiF2Ws0cdubFkiSQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA+B5p86fNH/9Dq/OP3Pun7Lq0PYQs5Gc2BzeR87Dlu5N6MRdvwoF/Ns9keW6rcs2snMiLaBrtqoQDwUVZdX4Zs8kixENk/zsxu7zOnccc6EqYrN0lr/cbcWJsFlFSRV0JXUBrbV7FqG0WUBhRU8JlUUFnE6liWlTQ2Qkmoimh+xss2Hijbi8BRRFVJdxlLepVsf7xpApo7LHzoKoSJtNrhpsqpmXA7N/RrPuYihK6QPMqoDWLoIp7r4LjwZPeaZy516iL6rmYugqWyUUV1JYwqKIxw6pR/QqOZN+ZuoTRRk39Fp3JVm26EuamZhTcbtJrBa24ggoT1m43bhm+DCsopC6hE/4t7h9o0URpwuC5ePjyAr7Jx1KY0N0/p16jBgHlL7EKE+b8KpZJx92Xah6dCYMqPtKiidaETj1iVsFe+yx6EwbPxb4tmihOmNXr7Afs/UUpTrj/8m42dnF3e6qF2oTBSsYZ9twMVptwXwtYf1/sTGfCNHibKL32alSdCW8q+ECj6kwYq6DTp1FVJvTfB8fHs/dcXMirqDFh8Lp0DJfh8ojqEuY728YPmC/DI9tTHalL6G382mKxnTbvo7bRl3B7LVix2K6/L949tonTldA7fLHh69K0drt53h3hbXTL4nY3/GkTNmw6+dtTkueiroSNhy9+o266j6kq4fZ+BevHNr87D6oq4cHkZSoqGOnD4tjGnXOfug+qKGFWptXlmujWfVVFUUBNCV2GQ7RFy0/LiKfnvZe6KtrGw5d51sfvookoS+iq2HD4kjfqScmapvrhiOiwyEX8aE6wFq5Lq199rSVXdfCxGhaWf3lgqeVlHquWb+4Ban4u+V0zURNQzUQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/Kf+AN1iGFg+mCFSAAAAAElFTkSuQmCC" alt="" srcset="">
        </div>
        <div>
            <img class="w-full h-full" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAaVBMVEUAAAD///8oKCiPj4/7+/sFBQVlZWW9vb35+fn19fXo6OjJyckrKyvMzMxdXV0TExNeXl4wMDBqamq8vLyXl5dXV1fr6+vU1NQNDQ1ubm40NDS0tLQ5OTkeHh6lpaXExMScnJzf399JSUncR1bBAAAC8UlEQVR4nO3aW3PaMBCGYYvIlDMJ4UxSmv7/H1nLxkYywvaaprN03ueiF2Ws0cdubFkiSQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA+B5p86fNH/9Dq/OP3Pun7Lq0PYQs5Gc2BzeR87Dlu5N6MRdvwoF/Ns9keW6rcs2snMiLaBrtqoQDwUVZdX4Zs8kixENk/zsxu7zOnccc6EqYrN0lr/cbcWJsFlFSRV0JXUBrbV7FqG0WUBhRU8JlUUFnE6liWlTQ2Qkmoimh+xss2Hijbi8BRRFVJdxlLepVsf7xpApo7LHzoKoSJtNrhpsqpmXA7N/RrPuYihK6QPMqoDWLoIp7r4LjwZPeaZy516iL6rmYugqWyUUV1JYwqKIxw6pR/QqOZN+ZuoTRRk39Fp3JVm26EuamZhTcbtJrBa24ggoT1m43bhm+DCsopC6hE/4t7h9o0URpwuC5ePjyAr7Jx1KY0N0/p16jBgHlL7EKE+b8KpZJx92Xah6dCYMqPtKiidaETj1iVsFe+yx6EwbPxb4tmihOmNXr7Afs/UUpTrj/8m42dnF3e6qF2oTBSsYZ9twMVptwXwtYf1/sTGfCNHibKL32alSdCW8q+ECj6kwYq6DTp1FVJvTfB8fHs/dcXMirqDFh8Lp0DJfh8ojqEuY728YPmC/DI9tTHalL6G382mKxnTbvo7bRl3B7LVix2K6/L949tonTldA7fLHh69K0drt53h3hbXTL4nY3/GkTNmw6+dtTkueiroSNhy9+o266j6kq4fZ+BevHNr87D6oq4cHkZSoqGOnD4tjGnXOfug+qKGFWptXlmujWfVVFUUBNCV2GQ7RFy0/LiKfnvZe6KtrGw5d51sfvookoS+iq2HD4kjfqScmapvrhiOiwyEX8aE6wFq5Lq199rSVXdfCxGhaWf3lgqeVlHquWb+4Ban4u+V0zURNQzUQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA/Kf+AN1iGFg+mCFSAAAAAElFTkSuQmCC" alt="" srcset="">
        </div>
    </div>
@endsection