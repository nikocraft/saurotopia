<template>
    <div v-if="commentsLoaded" class="comments">
        <h3>Comments</h3>
        <!-- our author: {{ contentAuthorId }} -->
        <comments-tree v-for="comment in rootComments" style="margin-bottom: 10px;"
            :comment="comment"
            :depth="0"
            :allowNested="allowNested"
            :maxDepth="maxDepth"
            :key="comment.id">
        </comments-tree>

        <div v-if="!replyingToComment">
            <comment-box :content-id="contentId"></comment-box>
        </div>
    </div>
    <div v-else class="load-comments-wrapper">
        <div @click="loadComments()" class="btn btn-primary">Load Comments</div>
    </div>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex'

    export default {
        data: function data() {
            return {
                commentItems: {},
                header: {'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content},
                pagination: {
                    total: 0,
                    per_page: 2,
                    from: 1,
                    to: 0,
                    current_page: 1
                },
                replyBtnTextString: 'Reply',
                replyToComment: 0,
            }
        },
        props: {
            contentId: { type: Number, default: 0 },
            contentAuthorId: { type: Number, default: 0 },
            order: { type: String, default: 'asc' },
            allowNested: { type: Boolean, default: false },
            maxDepth: { type: Number, default: 0 }
        },
        watch: {
            itemsPerPage(val, old) {
                this.pagination.current_page = 1
                this.loadComments()
            },
            sortBy(val, old) {
                this.pagination.current_page = 1
                this.loadComments()
            }
        },
        computed: {
            rootComments: {
                get() {
                    return this.$store.getters.rootComments
                }
            },
            commentsLoaded: {
                get() {
                    return this.$store.getters.commentsLoaded
                }
            },
            replyingToComment: {
                get() {
                    return this.$store.getters.replyingToComment
                }
            }
        },
        methods: {
            ...mapActions([
                'fetchComments',
                'setContentId'
            ]),
            loadComments() {
                this.fetchComments({
                    contentId: this.contentId,
                    contentAuthorId: this.contentAuthorId,
                    order: this.order
                })
            },
        },
        mounted: function() {
            this.setContentId(this.contentId)
        }
    }
</script>