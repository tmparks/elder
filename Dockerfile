# Development environment for WordPress
FROM wordpress

RUN apt-get update && DEBIAN_FRONTEND=noninteractive apt-get install --yes \
    git \
    git-lfs \
    imagemagick \
    pngcrush \
    && rm --recursive --force /var/lib/apt/lists/*
