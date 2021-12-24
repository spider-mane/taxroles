<?php

namespace WebTheory\TaxRoles;

class Model
{
    /**
     * @var string
     */
    protected $taxonomy;

    /**
     *
     */
    protected $roles;

    /**
     *
     */
    protected $rolesData;

    /**
     * role that signifies a term as being of the lowest possible ranking
     */
    protected $baronesque;

    /**
     * role that signifies term is of the highest possible ranking
     */
    protected $sovereign;

    /**
     * @var string[]
     */
    protected static $taxonomies = [];

    /**
     *
     */
    protected const REQUEST_VAR = 'wts_hierarchy_role';

    /**
     *
     */
    protected const WP_OPTION = 'wts_structural_term_roles';

    /**
     *
     */
    public function __construct(string $taxonomy, array $roles, string $sovereign, string $baronesque)
    {
        static::init();

        $this->taxonomy = $taxonomy;
        $this->roles = $roles;
        $this->sovereign = $sovereign;
        $this->baronesque = $baronesque;
    }
}
